<?php

namespace App;

/**
 * PHP SQLite Insert Demo
 */
class SQLiteGET {

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


    public function getUser() {
      $stmt = $this->pdo->query('SELECT email,password FROM users WHERE id = 1');
      $user = "";
      while ($row = $stmt->fetchObject()) {
          $user = $row;
      }
      return $user;
  }

  public function getProject() {
    $stmt = $this->pdo->query('SELECT * FROM project');
    $project = "";
    while ($row = $stmt->fetchObject()) {
        $project = $row;
    }
    return $project;
}

}