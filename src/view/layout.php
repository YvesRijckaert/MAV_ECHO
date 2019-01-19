<!DOCTYPE html>
<html>
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
        <a href="index.php?page=register">register</a>
        <a href="index.php?page=login">login</a>
      <?php else: ?>
      <nav>
        <ul>
          <li><a href="index.php?page=overview">Overview</a></li>
          <li><a href="index.php?page=progress&category=statistics">Progress</a></li>
          <li><a href="index.php?page=profile&category=information">Profile</a></li>
        </ul>
      </nav>
        <p><?php echo $_SESSION['user']['email'];?> - <a href="index.php?page=logout" class="logout-button">Logout</a></p>
      <?php endif; ?>
      <?php
        if (!empty($_SESSION['error'])) {
          echo '<div class="error box">' . $_SESSION['error'] . '</div>';
        }
        if (!empty($_SESSION['info'])) {
          echo '<div class="info box">' . $_SESSION['info'] . '</div>';
        }
      ?>
    </header>
    <?php echo $content; ?>
    <?php echo $js; ?>
  </body>
</html>
