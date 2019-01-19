<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="author" content="Yves Rijckaert">
    <meta name="description" content="PHP template">
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
