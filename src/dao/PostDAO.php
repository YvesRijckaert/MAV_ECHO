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

  public function insertFulfilledHabits($data){
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

}
