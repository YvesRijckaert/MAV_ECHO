<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="author" content="Yves Rijckaert Arthur Segaert">
    <meta name="description" content="Major Atelier V">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>
    <?php echo $css; ?>
  </head>
  <body>
    <header>
      <?php if (empty($_SESSION['user'])): ?>
      <nav>
        <ul>
          <li class="nav-item <?php if($currentPage === 'home') { echo 'nav-item-active';} ?>">
            <a href="index.php">Home</a>
          </li>
          <li class="nav-item <?php if($currentPage === 'register') { echo 'nav-item-active';} ?>">
            <a href="index.php?page=register">Register</a>
          </li>
          <li class="nav-item <?php if($currentPage === 'login') { echo 'nav-item-active';} ?>">
            <a href="index.php?page=login">Login</a>
          </li>
        </ul>
      </nav>
      <?php else: ?>
      <nav>
        <ul>
          <li class="nav-item <?php if($currentPage === 'overview') { echo 'nav-item-active';} ?>">
            <a href="index.php?page=overview&view=day&day=<?php echo date("d-m-Y") ?>">Overview</a>
          </li>
          <li class="nav-item <?php if($currentPage === 'progress') { echo 'nav-item-active';} ?>">
            <a href="index.php?page=progress&category=statistics">Progress</a>
          </li>
          <li class="nav-item <?php if($currentPage === 'profile') { echo 'nav-item-active';} ?>">
            <a href="index.php?page=profile&category=information">Profile</a>
          </li>
        </ul>
      </nav>
        <p>Hi, <?php echo $_SESSION['user']['nickname'];?> - <a href="index.php?page=logout" class="logout-button">Logout</a></p>
      <?php endif; ?>
      <?php
        if (!empty($_SESSION['error'])) {
          echo '<div class="session-error">' . $_SESSION['error'] . '</div>';
        }
        if (!empty($_SESSION['info'])) {
          echo '<div class="session-info">' . $_SESSION['info'] . '</div>';
        }
      ?>
    </header>
    <main>
    <?php echo $content; ?>
    </main>
    <?php echo $js; ?>
  </body>
</html>
