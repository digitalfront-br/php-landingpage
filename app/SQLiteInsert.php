<?php

namespace App;

/**
 * PHP SQLite Insert Demo
 */
class SQLiteInsert {

    /**
     * PDO object
     * @var \PDO
     */
    private $pdo;

    /**
     * Initialize the object with a specified PDO object
     * @param \PDO $pdo
     */
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    /**
     * Insert a new project into the projects table
     * @param string $project
     * @return the id of the new project
     */
    public function createProject($project) {
        $sql = 'INSERT INTO project(bg_color,txt_color,link,cupom,ads,logo,banner,file_logo,file_banner,user_id) VALUES(:bg_color,:txt_color,:link,:cupom,:ads,:logo,:banner,:file_logo,:file_banner,:user_id)';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':bg_color', $project['bg_color']);
        $stmt->bindValue(':txt_color', $project['txt_color']);
        $stmt->bindValue(':link', $project['link']);
        $stmt->bindValue(':cupom', $project['cupom']);
        $stmt->bindValue(':ads', $project['ads']);
        $stmt->bindValue(':logo', $project['logo']);
        $stmt->bindValue(':banner', $project['banner']);
        $stmt->bindValue(':file_logo', $project['file_logo']);
        $stmt->bindValue(':file_banner', $project['file_banner']);
        $stmt->bindValue(':user_id', $project['user_id']);
        $stmt->execute();

        return $this->pdo->lastInsertId();
    }

    public function createUser($email, $password) {
      $sql = 'INSERT INTO users(email,password) VALUES(:email, :password)';
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindValue(':email', $email);
      $stmt->bindValue(':password', $password);
      $stmt->execute();

      return $this->pdo->lastInsertId();
  }

}