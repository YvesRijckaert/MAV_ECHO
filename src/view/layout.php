<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="author" content="Yves Rijckaert Arthur Segaert">
    <meta name="description" content="Major Atelier V">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
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
          <li class="header-nav-item <?php if($currentPage === 'login') { echo 'header-nav-item-active';} ?>">
            <a href="index.php?page=login">Login</a>
          </li>
          <li class="header-nav-item <?php if($currentPage === 'register') { echo 'header-nav-item-active';} ?>">
            <a href="index.php?page=register" class="register-button">Hop on board</a>
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
        <?php if(empty($alreadyPostedToday)): ?>
          <a href="index.php?page=add" class="main-green-button">
            <svg width="25px" height="24px" viewBox="0 0 25 24" class="main-green-button-svg">
              <title>Add day button</title>
              <desc>Icon for add day button.</desc>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round">
                <g transform="translate(-1272.000000, -36.000000)" stroke="#ffffff" stroke-width="4">
                  <g transform="translate(1274.000000, 38.000000)">
                    <path d="M10.5,5.32907052e-15 L10.5,20"></path>
                    <path d="M10.5,5.32907052e-15 L10.5,20" transform="translate(10.500000, 10.000000) rotate(90.000000) translate(-10.500000, -10.000000) "></path>
                  </g>
                </g>
              </g>
            </svg>
            <span>Add Day</span>
          </a>
        <?php else: ?>
          <a href="index.php?page=add" class="main-green-button">
            <svg width="24px" height="21px" viewBox="0 0 24 21" class="main-green-button-svg">
              <title>Change day button</title>
              <desc>Icon for change day button.</desc>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-1284.000000, -14.000000)" stroke="#ffffff" stroke-width="2">
                  <path d="M1286.46798,23.1473573 L1290.06213,17.2473573 C1290.53402,16.4727162 1291.37551,16 1292.28257,16 L1299.71743,16 C1300.62449,16 1301.46598,16.4727162 1301.93787,17.2473573 L1305.53202,23.1473573 C1306.0381,23.9781148 1306.0381,25.0218852 1305.53202,25.8526427 L1301.93787,31.7526427 C1301.46598,32.5272838 1300.62449,33 1299.71743,33 L1292.28257,33 C1291.37551,33 1290.53402,32.5272838 1290.06213,31.7526427 L1286.46798,25.8526427 C1285.9619,25.0218852 1285.9619,23.9781148 1286.46798,23.1473573 Z M1296,27.7716515 C1297.90649,27.7716515 1299.45201,26.3068832 1299.45201,24.5 C1299.45201,22.6931168 1297.90649,21.2283485 1296,21.2283485 C1294.09351,21.2283485 1292.54799,22.6931168 1292.54799,24.5 C1292.54799,26.3068832 1294.09351,27.7716515 1296,27.7716515 Z"></path>
                </g>
              </g>
            </svg>
            <span>Change Day</span>
          </a>
        <?php endif; ?>
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
    <?php if($currentPage === 'home'): ?>
      <footer>
        <a href="#"><span>echo</span><span>echo</span></a>
      </footer>
    <?php endif; ?>
    <?php echo $js; ?>
  </body>
</html>
