<?php

require_once( __DIR__ . '/DAO.php');

class HabitDAO extends DAO {

  public function selectAll($user_id){
    $sql = "SELECT * FROM `habits` WHERE `user_id` = :user_id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':user_id', $user_id);
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

}
