<?php

require_once( __DIR__ . '/DAO.php');

class GoalDAO extends DAO {

  public function selectRepetitiveGoal($data) {
    $sql = "SELECT * FROM `repetitive` WHERE `user_id` = :user_id AND `repetitive_id` = :repetitive_id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':user_id', $data['user_id']);
    $stmt->bindValue(':repetitive_id', $data['repetitive_id']);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function selectStreakGoal($data) {
    $sql = "SELECT * FROM `streaks` WHERE `user_id` = :user_id AND `streak_id` = :streak_id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':user_id', $data['user_id']);
    $stmt->bindValue(':streak_id', $data['streak_id']);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function selectTotalAmountGoal($data) {
    $sql = "SELECT * FROM `total_amount` WHERE `user_id` = :user_id AND `total_amount_id` = :total_amount_id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':user_id', $data['user_id']);
    $stmt->bindValue(':total_amount_id', $data['total_amount_id']);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function deactivateRepetitiveGoal($data) {
    $sql = "UPDATE `repetitive` SET `active` = FALSE WHERE `user_id` = :user_id AND `repetitive_id` = :repetitive_id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':user_id', $data['user_id']);
    $stmt->bindValue(':repetitive_id', $data['repetitive_id']);
    $stmt->execute();
  }

  public function deactivateStreakGoal($data) {
    $sql = "UPDATE `streaks` SET `active` = FALSE WHERE `user_id` = :user_id AND `streak_id` = :streak_id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':user_id', $data['user_id']);
    $stmt->bindValue(':streak_id', $data['streak_id']);
    $stmt->execute();
  }

  public function deactivateTotalAmountGoal($data) {
    $sql = "UPDATE `total_amount` SET `active` = FALSE WHERE `user_id` = :user_id AND `total_amount_id` = :total_amount_id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':user_id', $data['user_id']);
    $stmt->bindValue(':total_amount_id', $data['total_amount_id']);
    $stmt->execute();
  }

  public function selectAllGoalsFromHabit($data) {
    $goals = array();
    $sql1 = "SELECT * FROM `repetitive` INNER JOIN `habits` ON repetitive.habit_id = habits.habit_id AND habits.habit_id = :habit_id WHERE repetitive.user_id = :user_id AND repetitive.completed = :completed AND repetitive.active = :active";
    $stmt1 = $this->pdo->prepare($sql1);
    $stmt1->bindValue(':user_id', $data['user_id']);
    $stmt1->bindValue(':habit_id', $data['habit_id']);
    $stmt1->bindValue(':completed', $data['completed']);
    $stmt1->bindValue(':active', $data['active']);
    $stmt1->execute();
    $goals['repetitive'] = $stmt1->fetch(PDO::FETCH_ASSOC);
    if($goals['repetitive'] === false) {
      $goals['repetitive'] = array(
        'no-goal' => TRUE,
        'habit_name' => $data['habit_name'],
        'habit_colour' => $data['habit_colour']
      );
    }
    $sql2 = "SELECT * FROM `streaks` INNER JOIN `habits` ON streaks.habit_id = habits.habit_id AND habits.habit_id = :habit_id WHERE streaks.user_id = :user_id AND streaks.completed = :completed AND streaks.active = :active";
    $stmt2 = $this->pdo->prepare($sql2);
    $stmt2->bindValue(':user_id', $data['user_id']);
    $stmt2->bindValue(':habit_id', $data['habit_id']);
    $stmt2->bindValue(':completed', $data['completed']);
    $stmt2->bindValue(':active', $data['active']);
    $stmt2->execute();
    $goals['streaks'] = $stmt2->fetch(PDO::FETCH_ASSOC);
    if($goals['streaks'] === false) {
      $goals['streaks'] = array(
        'no-goal' => TRUE,
        'habit_name' => $data['habit_name'],
        'habit_colour' => $data['habit_colour']
      );
    }
    $sql3 = "SELECT * FROM `total_amount` INNER JOIN `habits` ON total_amount.habit_id = habits.habit_id AND habits.habit_id = :habit_id WHERE total_amount.user_id = :user_id AND total_amount.completed = :completed AND total_amount.active = :active";
    $stmt3 = $this->pdo->prepare($sql3);
    $stmt3->bindValue(':user_id', $data['user_id']);
    $stmt3->bindValue(':habit_id', $data['habit_id']);
    $stmt3->bindValue(':completed', $data['completed']);
    $stmt3->bindValue(':active', $data['active']);
    $stmt3->execute();
    $goals['total_amount'] = $stmt3->fetch(PDO::FETCH_ASSOC);
    if($goals['total_amount'] === false) {
      $goals['total_amount'] = array(
        'no-goal' => TRUE,
        'habit_name' => $data['habit_name'],
        'habit_colour' => $data['habit_colour']
      );
    }
    return $goals;
  }

  public function selectAllGoals($data) {
    $goals = array();
    $sql1 = "SELECT * FROM `repetitive` INNER JOIN `habits` ON repetitive.habit_id = habits.habit_id WHERE repetitive.user_id = :user_id AND repetitive.completed = :completed AND repetitive.active = :active";
    $stmt1 = $this->pdo->prepare($sql1);
    $stmt1->bindValue(':user_id', $data['user_id']);
    $stmt1->bindValue(':completed', $data['completed']);
    $stmt1->bindValue(':active', $data['active']);
    $stmt1->execute();
    $goals['repetitive'] = $stmt1->fetchAll(PDO::FETCH_ASSOC);
    $sql2 = "SELECT * FROM `streaks` INNER JOIN `habits` ON streaks.habit_id = habits.habit_id WHERE streaks.user_id = :user_id AND streaks.completed = :completed AND streaks.active = :active";
    $stmt2 = $this->pdo->prepare($sql2);
    $stmt2->bindValue(':user_id', $data['user_id']);
    $stmt2->bindValue(':completed', $data['completed']);
    $stmt2->bindValue(':active', $data['active']);
    $stmt2->execute();
    $goals['streaks'] = $stmt2->fetchAll(PDO::FETCH_ASSOC);
    $sql3 = "SELECT * FROM `total_amount` INNER JOIN `habits` ON total_amount.habit_id = habits.habit_id WHERE total_amount.user_id = :user_id AND total_amount.completed = :completed AND total_amount.active = :active";
    $stmt3 = $this->pdo->prepare($sql3);
    $stmt3->bindValue(':user_id', $data['user_id']);
    $stmt3->bindValue(':completed', $data['completed']);
    $stmt3->bindValue(':active', $data['active']);
    $stmt3->execute();
    $goals['total_amount'] = $stmt3->fetchAll(PDO::FETCH_ASSOC);
    return $goals;
  }

  public function checkIfHabitAlreadyHasGoal($data) {
    $goals = array();
    $sql1 = "SELECT * FROM `repetitive` WHERE `user_id` = :user_id AND `habit_id` = :habit_id AND `completed` = :completed AND `active` = :active";
    $stmt1 = $this->pdo->prepare($sql1);
    $stmt1->bindValue(':user_id', $data['user_id']);
    $stmt1->bindValue(':habit_id', $data['habit_id']);
    $stmt1->bindValue(':completed', $data['completed']);
    $stmt1->bindValue(':active', $data['active']);
    $stmt1->execute();
    $goals['repetitive'] = $stmt1->fetch(PDO::FETCH_ASSOC);
    $sql2 = "SELECT * FROM `streaks` WHERE `user_id` = :user_id AND `habit_id` = :habit_id AND `completed` = :completed AND `active` = :active";
    $stmt2 = $this->pdo->prepare($sql2);
    $stmt2->bindValue(':user_id', $data['user_id']);
    $stmt2->bindValue(':habit_id', $data['habit_id']);
    $stmt2->bindValue(':completed', $data['completed']);
    $stmt2->bindValue(':active', $data['active']);
    $stmt2->execute();
    $goals['streaks'] = $stmt2->fetch(PDO::FETCH_ASSOC);
    $sql3 = "SELECT * FROM `total_amount` WHERE `user_id` = :user_id AND `habit_id` = :habit_id AND `completed` = :completed AND `active` = :active";
    $stmt3 = $this->pdo->prepare($sql3);
    $stmt3->bindValue(':user_id', $data['user_id']);
    $stmt3->bindValue(':habit_id', $data['habit_id']);
    $stmt3->bindValue(':completed', $data['completed']);
    $stmt3->bindValue(':active', $data['active']);
    $stmt3->execute();
    $goals['total_amount'] = $stmt3->fetch(PDO::FETCH_ASSOC);
    return $goals;
  }

  public function insertStreakGoal($data) {
    $sql = "INSERT INTO `streaks` (`user_id`, `habit_id`, `time_amount`, `time_type`, `completed`, `active`) VALUES (:user_id, :habit_id, :time_amount, :time_type, :completed, :active)";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':user_id', $data['user_id']);
    $stmt->bindValue(':habit_id', $data['habit_id']);
    $stmt->bindValue(':time_amount', $data['time_amount']);
    $stmt->bindValue(':time_type', $data['time_type']);
    $stmt->bindValue(':completed', $data['completed']);
    $stmt->bindValue(':active', $data['active']);
    $stmt->execute();
  }

}
