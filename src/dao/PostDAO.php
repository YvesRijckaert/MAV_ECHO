<?php

require_once( __DIR__ . '/DAO.php');

class PostDAO extends DAO {

  public function selectAll(){
    $sql = "SELECT * FROM `daily_posts`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectAllPostsFromUser($data){
    $sql = "SELECT COUNT(`post_id`) FROM `daily_posts` WHERE `user_id` = :user_id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':user_id', $data['user_id']);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function selectById($id){
    $sql = "SELECT * FROM `daily_posts` WHERE `post_id` = :post_id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':post_id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function checkDate($data) {
    $sql = "SELECT * FROM `daily_posts` WHERE `user_id` = :user_id AND `date` = :current_date";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':user_id', $data['user_id']);
    $stmt->bindValue(':current_date', $data['current_date']);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function getPostOfDay($data) {
    $sql = "SELECT * FROM `daily_posts` WHERE `user_id` = :user_id AND `date` = :date";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':user_id', $data['user_id']);
    $stmt->bindValue(':date', $data['date']);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function insertDailyPost($data) {
    $errors = $this->validate($data);
    if (empty($errors)) {
      $sql = "INSERT INTO `daily_posts` (`user_id`, `date`, `short_memory`, `feelings`) VALUES (:user_id, :date, :short_memory, :feelings)";
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindValue(':user_id', $data['user_id']);
      $stmt->bindValue(':date', $data['date']);
      $stmt->bindValue(':short_memory', $data['short_memory']);
      $stmt->bindValue(':feelings', $data['feelings']);
      if($stmt->execute()) {
        $insertedId = $this->pdo->lastInsertId();
        return $this->selectById($insertedId);
      }
    }
    return false;
  }

  public function updateDailyPost($data) {
    $sql = "UPDATE `daily_posts` SET `short_memory` = :short_memory, `feelings` = :feelings  WHERE `post_id` = :post_id AND `user_id` = :user_id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':user_id', $data['user_id']);
    $stmt->bindValue(':post_id', $data['post_id']);
    $stmt->bindValue(':short_memory', $data['short_memory']);
    $stmt->bindValue(':feelings', $data['feelings']);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function checkIfBadDays($data) {
    $sql = "SELECT * FROM `daily_posts` WHERE `user_id` = :user_id AND `date` >= :four_days_ago AND `date` <= :today_date AND `feelings` = -1";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':user_id', $data['user_id']);
    $stmt->bindValue(':today_date', $data['today_date']);
    $stmt->bindValue(':four_days_ago', $data['four_days_ago']);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function validate($data) {
    $errors = array();
    if (empty($data['user_id'])) {
      $errors['user_id'] = 'please enter the user id';
    }
    if (empty($data['date'])) {
      $errors['date'] = 'please enter the date';
    }
    if (empty($data['short_memory'])) {
      $errors['short_memory'] = 'please enter the short memory';
    }
    return $errors;
  }

}
