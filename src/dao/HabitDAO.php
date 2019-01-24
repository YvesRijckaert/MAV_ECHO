<?php

require_once( __DIR__ . '/DAO.php');

class HabitDAO extends DAO {

  public function selectAll($user_id) {
    $sql = "SELECT * FROM `habits` WHERE `user_id` = :user_id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':user_id', $user_id);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectAllFulfilledHabits($data) {
    $sql = "SELECT * FROM `fulfilled_habits` INNER JOIN `habits` ON fulfilled_habits.habit_id = habits.habit_id WHERE fulfilled_habits.user_id = :user_id AND fulfilled_habits.post_id = :post_id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':user_id', $data['user_id']);
    $stmt->bindValue(':post_id', $data['post_id']);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function insertFulfilledHabit($data) {
    $sql = "INSERT INTO `fulfilled_habits` (`user_id`, `post_id`, `habit_id`) VALUES (:user_id, :post_id, :habit_id)";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':user_id', $data['user_id']);
    $stmt->bindValue(':post_id', $data['post_id']);
    $stmt->bindValue(':habit_id', $data['habit_id']);
    $stmt->execute();
  }
}
