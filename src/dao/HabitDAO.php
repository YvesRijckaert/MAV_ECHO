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

  public function selectAllPossibleHabits() {
    $sql = "SELECT * FROM `data_habit_name`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectAllPossibleHabitIcons($colour) {
    $sql = "SELECT * FROM `data_habit_icon` WHERE `habit_colour_name` = :colour";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':colour', $colour);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectHabitIcon($habit_icon_id) {
    $sql = "SELECT * FROM `data_habit_icon` WHERE `data_habit_icon_id` = :habit_icon_id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':habit_icon_id', $habit_icon_id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function selectAllActiveHabits($data) {
    $sql = "SELECT * FROM `habits` WHERE `user_id` = :user_id AND `active` = :active";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':user_id', $data['user_id']);
    $stmt->bindValue(':active', $data['active']);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function checkIfColourHasActiveHabits($data) {
    $sql = "SELECT * FROM `habits` WHERE `user_id` = :user_id AND `habit_colour_name` = :habit_colour_name";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':user_id', $data['user_id']);
    $stmt->bindValue(':habit_colour_name', $data['habit_colour_name']);
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

  public function getAllFulfilledHabitsOfDay($data) {
    $sql = "SELECT * FROM `fulfilled_habits` INNER JOIN `daily_posts` ON fulfilled_habits.post_id = daily_posts.post_id AND daily_posts.date = :date INNER JOIN `habits` ON fulfilled_habits.habit_id = habits.habit_id WHERE fulfilled_habits.user_id = :user_id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':user_id', $data['user_id']);
    $stmt->bindValue(':date', $data['date']);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function getSpecificFulfilledHabitsOfDay($data) {
    $sql = "SELECT * FROM `fulfilled_habits` INNER JOIN `daily_posts` ON fulfilled_habits.post_id = daily_posts.post_id AND daily_posts.date = :date INNER JOIN `habits` ON fulfilled_habits.habit_id = habits.habit_id WHERE fulfilled_habits.user_id = :user_id AND fulfilled_habits.habit_id = :habit_id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':user_id', $data['user_id']);
    $stmt->bindValue(':date', $data['date']);
    $stmt->bindValue(':habit_id', $data['habit_id']);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function insertNewHabit($data) {
    $sql = "INSERT INTO `habits` (`user_id`, `habit_name`, `habit_colour_name`, `habit_colour`, `habit_icon`, `active`) VALUES (:user_id, :habit_name, :habit_colour_name, :habit_colour, :habit_icon, 1)";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':user_id', $data['user_id']);
    $stmt->bindValue(':habit_name', $data['habit_name']);
    $stmt->bindValue(':habit_colour_name', $data['habit_colour_name']);
    $stmt->bindValue(':habit_colour', $data['habit_colour']);
    $stmt->bindValue(':habit_icon', $data['habit_icon']);
    $stmt->execute();
  }

  public function insertFulfilledHabit($data) {
    $sql = "INSERT INTO `fulfilled_habits` (`user_id`, `post_id`, `habit_id`) VALUES (:user_id, :post_id, :habit_id)";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':user_id', $data['user_id']);
    $stmt->bindValue(':post_id', $data['post_id']);
    $stmt->bindValue(':habit_id', $data['habit_id']);
    $stmt->execute();
  }

  public function deleteFulfilledHabits($data) {
    $sql = "DELETE FROM `fulfilled_habits` WHERE `user_id` = :user_id AND `post_id` = :post_id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':user_id', $data['user_id']);
    $stmt->bindValue(':post_id', $data['post_id']);
    $stmt->execute();
  }

  public function deactivateHabit($data) {
    $sql = "UPDATE `habits` SET `active` = FALSE WHERE `user_id` = :user_id AND `habit_id` = :habit_id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':user_id', $data['user_id']);
    $stmt->bindValue(':habit_id', $data['habit_id']);
    $stmt->execute();
  }
}
