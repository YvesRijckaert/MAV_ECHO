<?php
require_once __DIR__ . '/DAO.php';

class UserDAO extends DAO {

  public function selectById($id) {
    $sql = "SELECT * FROM `users` WHERE `user_id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function selectByEmail($email) {
    $sql = "SELECT * FROM `users` WHERE `email` = :email";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':email', $email);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function insert($data) {
    $errors = $this->validate($data);
    if (empty($errors)) {
      $sql = "INSERT INTO `users` (`email`, `password`, `nickname`, `birthdate`, `lifegoal`, `date_joined`) VALUES (:email, :password, :nickname, :birthdate, :lifegoal, :date_joined)";
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindValue(':email', $data['email']);
      $stmt->bindValue(':password', $data['password']);
      $stmt->bindValue(':nickname', $data['nickname']);
      $stmt->bindValue(':birthdate', $data['birthdate']);
      $stmt->bindValue(':lifegoal', $data['lifegoal']);
      $stmt->bindValue(':date_joined', date("Y-m-d"));
      if($stmt->execute()) {
        $insertedId = $this->pdo->lastInsertId();
        return $this->selectById($insertedId);
      }
    }
    return false;
  }

  public function update($data) {
    $sql = "UPDATE `users` SET `email` = :email, `nickname` = :nickname, `birthdate` = :birthdate, `lifegoal` = :lifegoal WHERE `user_id` = :user_id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':user_id', $data['user_id']);
    $stmt->bindValue(':email', $data['email']);
    $stmt->bindValue(':nickname', $data['nickname']);
    $stmt->bindValue(':birthdate', $data['birthdate']);
    $stmt->bindValue(':lifegoal', $data['lifegoal']);
    $stmt->execute();
  }

  public function validate($data) {
    $errors = array();
    if (empty($data['email'])) {
      $errors['email'] = 'please enter the email';
    }
    if (empty($data['password'])) {
      $errors['password'] = 'please enter the password';
    }
    if (empty($data['nickname'])) {
      $errors['nickname'] = 'please enter the nickname';
    }
    if (empty($data['birthdate'])) {
      $errors['birthdate'] = 'please enter the birthdate';
    }
    if (empty($data['lifegoal'])) {
      $errors['lifegoal'] = 'please enter the lifegoal';
    }
    return $errors;
  }
}
