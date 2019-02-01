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

  public function selectAllGoalsWithColour($data) {
    $goals = array();

    $sql1 = "SELECT * FROM `repetitive` WHERE `user_id` = :user_id AND `completed` = :completed";
    $stmt1 = $this->pdo->prepare($sql1);
    $stmt1->bindValue(':user_id', $data['user_id']);
    $stmt1->bindValue(':completed', $data['completed']);
    $stmt1->execute();
    array_push($goals, $stmt1->fetch(PDO::FETCH_ASSOC));

    $sql2 = "SELECT * FROM `streaks` WHERE `user_id` = :user_id AND `completed` = :completed";
    $stmt2 = $this->pdo->prepare($sql2);
    $stmt2->bindValue(':user_id', $data['user_id']);
    $stmt2->bindValue(':completed', $data['completed']);
    $stmt2->execute();
    array_push($goals, $stmt2->fetch(PDO::FETCH_ASSOC));

    $sql3 = "SELECT * FROM `total_amount` WHERE `user_id` = :user_id AND `completed` = :completed";
    $stmt3 = $this->pdo->prepare($sql3);
    $stmt3->bindValue(':user_id', $data['user_id']);
    $stmt3->bindValue(':completed', $data['completed']);
    $stmt3->execute();
    array_push($goals, $stmt3->fetch(PDO::FETCH_ASSOC));

    return $goals;
  }
}
