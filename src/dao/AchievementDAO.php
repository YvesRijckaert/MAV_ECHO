<?php

require_once( __DIR__ . '/DAO.php');

class AchievementDAO extends DAO {

  public function selectAllPossibleAchievements() {
    $sql = "SELECT * FROM `data_achievements`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

}
