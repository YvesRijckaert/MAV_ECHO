<?php

require_once( __DIR__ . '/DAO.php');

class GoalDAO extends DAO {

  public function selectAllGoals($user_id) {
    $sql = "SELECT * FROM `repetitive` WHERE `user_id` = :user_id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':user_id', $user_id);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
