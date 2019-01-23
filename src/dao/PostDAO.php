<?php

require_once( __DIR__ . '/DAO.php');

class PostDAO extends DAO {

  public function selectAll(){
    $sql = "SELECT * FROM `daily_posts`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectById($id){
    $sql = "SELECT * FROM `daily_posts` WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
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

  public function insertDailyPost($data){
    $sql = "INSERT INTO `daily_posts` (`user_id`, `date`, `short_memory`, `happiness_ratio`, `fulfilled_habits`, `unfulfilled_habits`) VALUES (:user_id, :date, :short_memory, :happiness_ratio, :fulfilled_habits, :unfulfilled_habits)";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':user_id', $data['user_id']);
    $stmt->bindValue(':date', $data['date']);
    $stmt->bindValue(':short_memory', $data['short_memory']);
    $stmt->bindValue(':happiness_ratio', $data['happiness_ratio']);
    $stmt->bindValue(':fulfilled_habits', $data['fulfilled_habits']);
    $stmt->bindValue(':unfulfilled_habits', $data['unfulfilled_habits']);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function updateDailyPost($data){
    $sql = "UPDATE `daily_posts` SET `short_memory` = :short_memory, `happiness_ratio` = :happiness_ratio, `fulfilled_habits` = :fulfilled_habits, `unfulfilled_habits` = :unfulfilled_habits WHERE `user_id` = :user_id AND `date` = :date";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':short_memory', $data['short_memory']);
    $stmt->bindValue(':happiness_ratio', $data['happiness_ratio']);
    $stmt->bindValue(':fulfilled_habits', $data['fulfilled_habits']);
    $stmt->bindValue(':unfulfilled_habits', $data['unfulfilled_habits']);
    $stmt->bindValue(':user_id', $data['user_id']);
    $stmt->bindValue(':date', $data['date']);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

}
