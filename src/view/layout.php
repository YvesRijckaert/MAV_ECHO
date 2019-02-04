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
    <a href="#main" class="skip-link">Skip to main content</a>
    <header class="header">
      <h1 class="header-title">
        <a href="index.php" class="header-title-link" >
          <span>echo</span>
          <span>echo</span>
        </a>
      </h1>
      <?php if (empty($_SESSION['user'])): ?>
      <nav class="header-nav">
        <h2 class="header-nav-title hide">Header navigation</h2>
        <ul class="header-nav-ul">
          <li class="header-nav-item <?php if($currentPage === 'home') { echo 'header-nav-item-active';} ?>">
            <a href="index.php">Home</a>
          </li>
          <li class="header-nav-item <?php if($currentPage === 'register') { echo 'header-nav-item-active';} ?>">
            <a href="index.php?page=register">Register</a>
          </li>
          <li class="header-nav-item <?php if($currentPage === 'login') { echo 'header-nav-item-active';} ?>">
            <a href="index.php?page=login">Login</a>
          </li>
        </ul>
      </nav>
      <?php else: ?>
      <nav class="header-nav">
        <h2 class="header-nav-title hide">Header navigation</h2>
        <ul class="header-nav-ul">
          <li class="header-nav-item <?php if($currentPage === 'overview') { echo 'header-nav-item-active';} ?>">
            <a href="index.php?page=overview&view=day&day=<?php echo date("d-m-Y") ?>" class="header-nav-item-link">
              <svg width="18px" height="18px" viewBox="0 0 18 18" class="header-nav-item-link-icon">
                <title>Overview link</title>
                <desc>Icon for overview.</desc>
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(-742.000000, -42.000000)" <?php if($currentPage === 'overview') { echo 'fill="#2b2b2b"';} else { echo 'stroke="#2b2b2b"';} ?>  stroke-width="2" class="header-nav-item-link-icon-group">
                      <g transform="translate(742.000000, 39.000000)">
                        <rect x="1" y="4" width="16" height="16" rx="5"></rect>
                      </g>
                    </g>
                  </g>
                </svg>
              <span>overview</span>
            </a>
          </li>
          <li class="header-nav-item <?php if($currentPage === 'progress') { echo 'header-nav-item-active';} ?>">
            <a href="index.php?page=progress&category=statistics" class="header-nav-item-link">
              <svg width="18px" height="18px" viewBox="0 0 18 18" class="header-nav-item-link-icon">
                <title>Progress link</title>
                <desc>Icon for progress.</desc>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-911.000000, -42.000000)" <?php if($currentPage === 'progress') { echo 'fill="#2b2b2b"';} else { echo 'stroke="#2b2b2b"';} ?> stroke-width="2" class="header-nav-item-link-icon-group">
                    <path d="M928,45.3773705 C928,44.8469375 927.789286,44.3382297 927.414214,43.9631569 C926.633165,43.1821083 925.366835,43.1821083 924.585786,43.9631569 L912.963157,55.5857864 C912.588084,55.9608592 912.37737,56.469567 912.37737,57 C912.37737,58.1045695 913.272801,59 914.37737,59 L926,59 C927.104569,59 928,58.1045695 928,57 L928,45.3773705 Z"></path>
                  </g>
                </g>
              </svg>
              <span>progress</span>
            </a>
          </li>
          <li class="header-nav-item <?php if($currentPage === 'profile') { echo 'header-nav-item-active';} ?>">
            <a href="index.php?page=profile&category=information" class="header-nav-item-link">
              <svg width="20px" height="20px" viewBox="0 0 20 20" class="header-nav-item-link-icon">
                <title>Profile link</title>
                <desc>Icon for profile.</desc>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1083.000000, -41.000000)" <?php if($currentPage === 'profile') { echo 'fill="#2b2b2b"';} else { echo 'stroke="#2b2b2b"';} ?> stroke-width="2" class="header-nav-item-link-icon-group">
                    <g transform="translate(742.000000, 39.000000)">
                      <circle cx="351" cy="12" r="9"></circle>
                    </g>
                  </g>
                </g>
              </svg>
              <span>profile</span>
            </a>
          </li>
        </ul>
      </nav>
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
    <main class="main main-<?php echo $currentPage ?>">
    <?php echo $content; ?>
    </main>
    <?php echo $js; ?>
  </body>
</html>
