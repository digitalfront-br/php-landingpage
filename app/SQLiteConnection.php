<?php
namespace App;

/**
 * SQLite connnection
 */
class SQLiteConnection {
    /**
     * PDO instance
     * @var type 
     */
    private $pdo;

    /**
     * return in instance of the PDO object that connects to the SQLite database
     * @return \PDO
     */
    public function connect() {
        if ($this->pdo == null) {
          try {
            $this->pdo = new \PDO("sqlite:" . Config::_DB);
         } catch (\PDOException $e) {
            echo print_r($e);
         }
        }
        return $this->pdo;
    }
    public function connectRoot() {
      if ($this->pdo == null) {
        try {
          $this->pdo = new \PDO("sqlite:" . Config::_DB_ROOT);
       } catch (\PDOException $e) {
          echo print_r($e);
       }
      }
      return $this->pdo;
  }
}