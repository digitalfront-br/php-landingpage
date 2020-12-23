<?php

namespace App;

/**
 * SQLite Create Table Demo
 */
class SQLiteCreateTable
{

  /**
   * PDO object
   * @var \PDO
   */
  private $pdo;

  /**
   * connect to the SQLite database
   */
  public function __construct($pdo)
  {
    $this->pdo = $pdo;
  }

  /**
   * create tables 
   */
  public function createTables()
  {
    $commands = [
      'CREATE TABLE IF NOT EXISTS users (
                        id  INTEGER PRIMARY KEY,
                        email TEXT NOT NULL,
                        password TEXT NOT NULL
                      )',
      'CREATE TABLE IF NOT EXISTS project (
                    id INTEGER PRIMARY KEY,
                    bg_color  VARCHAR (255),
                    txt_color  VARCHAR (255),
                    cupom  VARCHAR (255),
                    logo  VARCHAR (255),
                    file_logo  VARCHAR (255),
                    banner  VARCHAR (255),
                    file_banner  VARCHAR (255),
                    link  VARCHAR (255),
                    ads  TEXT,
                    user_id VARCHAR (255),
                    FOREIGN KEY (user_id)
                    REFERENCES users(id) ON UPDATE CASCADE
                                                    ON DELETE CASCADE)'
    ];
    // execute the sql commands to create new tables
    foreach ($commands as $command) {
      $this->pdo->exec($command);
    }
  }

  /**
   * get the table list in the database
   */
  public function getTableList()
  {

    $stmt = $this->pdo->query("SELECT name FROM sqlite_master WHERE type = 'table' ORDER BY name");
    $tables = [];
    while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
      $tables[] = $row['name'];
    }

    return $tables;
  }

}
