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

  public function selectAllGoalsFromHabit($data) {
    $goals = array();

    $sql1 = "SELECT * FROM `repetitive` INNER JOIN `habits` ON repetitive.habit_id = habits.habit_id AND habits.habit_id = :habit_id WHERE repetitive.user_id = :user_id AND repetitive.completed = :completed";
    $stmt1 = $this->pdo->prepare($sql1);
    $stmt1->bindValue(':user_id', $data['user_id']);
    $stmt1->bindValue(':completed', $data['completed']);
    $stmt1->bindValue(':habit_id', $data['habit_id']);
    $stmt1->execute();
    $goals['repetitive'] = $stmt1->fetch(PDO::FETCH_ASSOC);

    $sql2 = "SELECT * FROM `streaks` INNER JOIN `habits` ON streaks.habit_id = habits.habit_id AND habits.habit_id = :habit_id WHERE streaks.user_id = :user_id AND streaks.completed = :completed";
    $stmt2 = $this->pdo->prepare($sql2);
    $stmt2->bindValue(':user_id', $data['user_id']);
    $stmt2->bindValue(':completed', $data['completed']);
    $stmt2->bindValue(':habit_id', $data['habit_id']);
    $stmt2->execute();
    $goals['streaks'] = $stmt2->fetch(PDO::FETCH_ASSOC);

    $sql3 = "SELECT * FROM `total_amount` INNER JOIN `habits` ON total_amount.habit_id = habits.habit_id AND habits.habit_id = :habit_id WHERE total_amount.user_id = :user_id AND total_amount.completed = :completed";
    $stmt3 = $this->pdo->prepare($sql3);
    $stmt3->bindValue(':user_id', $data['user_id']);
    $stmt3->bindValue(':completed', $data['completed']);
    $stmt3->bindValue(':habit_id', $data['habit_id']);
    $stmt3->execute();
    $goals['total_amount'] = $stmt3->fetch(PDO::FETCH_ASSOC);

    return $goals;
  }
}
