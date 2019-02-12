<?php

require_once( __DIR__ . '/DAO.php');

class AchievementDAO extends DAO {

  public function selectAllPossibleAchievements() {
    $sql = "SELECT * FROM `data_achievements`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectById($id){
    $sql = "SELECT * FROM `data_achievements` WHERE `data_achievement_id` = :data_achievement_id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':data_achievement_id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function unlockAchievement($data) {
    $sql = "INSERT INTO `fulfilled_achievements` (`user_id`, `achievement_id`) VALUES (:user_id, :achievement_id)";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':user_id', $data['user_id']);
    $stmt->bindValue(':achievement_id', $data['achievement_id']);
    if($stmt->execute()) {
      $insertedId = $this->pdo->lastInsertId();
      return $this->selectById($insertedId);
    }
  }

}
