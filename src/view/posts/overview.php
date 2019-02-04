<nav class="main-nav">
  <h2 class="main-nav-title hide">Overview navigation</h2>
  <ul class="main-nav-ul">
    <li class="main-nav-item main-nav-item-day <?php if($view === 'day') { echo 'main-nav-item-active';} ?>">
      <a href="index.php?page=overview&view=day&day=<?php echo date("d-m-Y") ?>" class="main-nav-item-link">day</a>
    </li>
    <li class="main-nav-item main-nav-item-month <?php if($view === 'month') { echo 'main-nav-item-active';} ?>">
    <?php if(!empty($activeHabits)): ?>
      <a href="index.php?page=overview&view=month&month=<?php echo date("m-Y")?>&chosen_habit=<?php echo $firstActiveHabit ?>" class="main-nav-item-link">month</a>
    <?php endif; ?>
    </li>
  </ul>
</nav>

<?php if(empty($alreadyPostedToday)): ?>
  <a href="index.php?page=add" class="main-green-button">
    <svg width="25px" height="24px" viewBox="0 0 25 24">
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
    <svg width="24px" height="21px" viewBox="0 0 24 21">
      <title>Change day button</title>
      <desc>Icon for change day button.</desc>
      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g transform="translate(-1284.000000, -14.000000)" stroke="#ffffff" stroke-width="2.6">
          <path d="M1286.46798,23.1473573 L1290.06213,17.2473573 C1290.53402,16.4727162 1291.37551,16 1292.28257,16 L1299.71743,16 C1300.62449,16 1301.46598,16.4727162 1301.93787,17.2473573 L1305.53202,23.1473573 C1306.0381,23.9781148 1306.0381,25.0218852 1305.53202,25.8526427 L1301.93787,31.7526427 C1301.46598,32.5272838 1300.62449,33 1299.71743,33 L1292.28257,33 C1291.37551,33 1290.53402,32.5272838 1290.06213,31.7526427 L1286.46798,25.8526427 C1285.9619,25.0218852 1285.9619,23.9781148 1286.46798,23.1473573 Z M1296,27.7716515 C1297.90649,27.7716515 1299.45201,26.3068832 1299.45201,24.5 C1299.45201,22.6931168 1297.90649,21.2283485 1296,21.2283485 C1294.09351,21.2283485 1292.54799,22.6931168 1292.54799,24.5 C1292.54799,26.3068832 1294.09351,27.7716515 1296,27.7716515 Z"></path>
        </g>
      </g>
    </svg>
    <span>Change Day</span>
  </a>
<?php endif; ?>

<?php if($view == 'day') : ?>
  <section class="main-overview-day" id="main">
    <h2 class="main-overview-day-title hide">Day view</h2>
    <?php if(isset($previousDay)):?>
      <a href="index.php?page=overview&view=day&day=<?php echo $previousDay; ?>" class="main-overview-day-previous">
        <svg width="13px" height="22px" viewBox="0 0 13 22">
          <title>Link to previous day</title>
          <desc>Icon for previous day link.</desc>
          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round">
            <g transform="translate(-167.000000, -464.000000)" stroke="#2B2B2B" stroke-width="2">
              <g transform="translate(169.000000, 465.000000)">
                <polyline transform="translate(5.000000, 10.000000) rotate(-180.000000) translate(-5.000000, -10.000000) " points="0 0 10 10 0 20"></polyline>
              </g>
            </g>
          </g>
        </svg>
      </a>
    <?php endif; ?>
    <?php if(isset($nextDay)):?>
      <a href="index.php?page=overview&view=day&day=<?php echo $nextDay; ?>" class="main-overview-day-next">
        <svg width="13px" height="22px" viewBox="0 0 13 22">
          <title>Link to next day</title>
          <desc>Icon for next day link.</desc>
          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round">
            <g transform="translate(-1261.000000, -464.000000)" stroke="#2B2B2B" stroke-width="2">
              <g transform="translate(169.000000, 465.000000)">
                <polyline points="1093 0 1103 10 1093 20"></polyline>
              </g>
            </g>
          </g>
        </svg>
      </a>
    <?php endif; ?>
    <?php if(!empty($postOfEnteredDay)): ?>
      <section class="main-overview-day-collage">
        <h3 class="day-collage-title hide">Day view collage</h3>
        <img src="../../assets/img/collage-test.png" alt="collage" class="test-img" />
      </section>
      <section class="main-overview-day-info">
        <h3 class="day-info-title hide">Day view info</h3>
        <p class="day-info-date">
          <span class="day-info-date-span"><?php echo $currentDay; ?></span>
          <time datetime="<?php echo $currentDateHTML ?>" class="main-overview-day-date"><?php echo $currentDate ?></time>
        </p>
        <article class="day-info-habits">
          <h4 class="day-info-habits-title">Habits</h4>
          <?php if(!empty($fulfilledHabitsOfEnteredDay)): ?>
            <ul class="day-info-habits-list">
              <?php foreach($fulfilledHabitsOfEnteredDay as $habit): ?>
              <li class="day-info-habits-list-item" style="background-color: <?php echo $habit['habit_colour'] ?>"><?php echo $habit['habit_name'] ?></li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>
        </article>
        <article class="day-info-mood">
          <h4 class="day-info-mood-title">Mood</h4>
          <?php switch ($postOfEnteredDay['feelings']) {
            case -1:
              echo'
              <svg width="86px" height="86px" viewBox="0 0 86 86" class="day-info-mood-img">
                <title>Bad mood</title>
                <desc>Icon for bad mood.</desc>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1305.000000, -244.000000)">
                    <g transform="translate(1091.000000, 241.000000)">
                        <g transform="translate(215.000000, 4.000000)">
                          <circle id="Oval-Copy-2" stroke="#FE5455" stroke-width="1.196345" fill="#FF5257" cx="41.872075" cy="41.872075" r="41.872075"></circle>
                          <g transform="translate(21.534210, 15.552485)">
                            <g transform="translate(2.392690, 31.104970)">
                              <rect id="path-1" x="0" y="0" width="38.28304" height="17.945175" rx="2.39269"></rect>
                              <path d="M-1.0658141e-14,0 L38.28304,0 C38.28304,9.91084648 29.7130896,17.945175 19.14152,17.945175 C8.56995042,17.945175 -3.55271368e-15,9.91084648 -3.55271368e-15,0 Z" id="Combined-Shape" fill="#FFFFFF" mask="url(#mask-2)" transform="translate(19.141520, 8.972588) rotate(-180.000000) translate(-19.141520, -8.972588) "></path>
                            </g>
                            <text id="bad" font-family="CircularStd-Medium, Circular Std" font-size="23.9269" font-weight="400" fill="#FFFFFF">
                              <tspan x="0" y="24">bad</tspan>
                            </text>
                          </g>
                        </g>
                      </g>
                    </g>
                  </g>
              </svg>';
              break;
            case 0:
              echo '
              <svg width="84px" height="84px" viewBox="0 0 84 84" class="day-info-mood-img">
                <title>Okay mood</title>
                <desc>Icon for okay mood.</desc>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1198.000000, -241.000000)">
                    <g transform="translate(1198.000000, 241.000000)">
                      <circle fill="#4285FF" cx="41.6499179" cy="41.6499179" r="41.6499179"></circle>
                      <rect fill="#FFFFFF" x="23.7999531" y="46.4099085" width="35.6999297" height="8.32998359" rx="4.16499179"></rect>
                      <text font-family="CircularStd-Medium, Circular Std" font-size="23.7999531" font-weight="400" fill="#ffffff">
                        <tspan x="27.3699461" y="39.4699695">ok</tspan>
                      </text>
                    </g>
                  </g>
                </g>
              </svg>';
              break;
            case 1:
              echo '
              <svg width="86px" height="86px" viewBox="0 0 86 86" class="day-info-mood-img">
                <title>Good mood</title>
                <desc>Icon for good mood.</desc>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1090.000000, -243.000000)">
                    <g transform="translate(1091.000000, 244.000000)">
                        <circle id="Oval" stroke="#00D28B" stroke-width="1.2" fill="#00D28B" cx="42" cy="42" r="42"></circle>
                        <g transform="translate(28.800000, 46.800000)">
                          <rect x="0" y="0" width="38.4" height="18" rx="2.4"></rect>
                          <path d="M-3.55271368e-15,0 L38.4,0 C38.4,9.9411255 29.8038672,18 19.2,18 C8.5961328,18 -3.55271368e-15,9.9411255 -3.55271368e-15,0 Z" fill="#FFFFFF"></path>
                        </g>
                        <text font-family="CircularStd-Medium, Circular Std" font-size="24" font-weight="400" fill="#ffffff">
                          <tspan x="12" y="39.6">great</tspan>
                        </text>
                      </g>
                    </g>
                  </g>
              </svg>';
              break;
            default:
            echo '<p class="error">No feelings for this day.</p>';
              break;
          } ?>
        </article>
        <a href="#" class="day-info-share">
          <svg width="60px" height="60px" viewBox="0 0 60 60">
            <title>Share button</title>
            <desc>Icon for share button.</desc>
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <g transform="translate(-1003.000000, -256.000000)">
                <g transform="translate(1003.000000, 256.000000)">
                  <circle fill="#f5f5f5" cx="30" cy="30" r="30"></circle>
                  <circle stroke="#2b2b2b" stroke-width="2.4" cx="30" cy="30" r="8.4"></circle>
                  <rect fill="#2b2b2b" x="22.8" y="20.4" width="4.8" height="4.8" rx="2.4"></rect>
                  <rect fill="#2b2b2b" x="36" y="27.6" width="4.8" height="4.8" rx="2.4"></rect>
                  <rect fill="#2b2b2b" x="22.8" y="34.8" width="4.8" height="4.8" rx="2.4"></rect>
                </g>
              </g>
            </g>
          </svg>
        </a>
      </section>
    <?php else: ?>
      <p class="main-overview-day-error error">Nothing available for <?php echo $currentDay . ' ' . $currentDate ?>.</p>
    <?php endif; ?>
  </section>
<?php endif; ?>

<?php if($view == 'month') : ?>
  <section class="main-overview-month" id="main">
    <h2 class="main-overview-month-title hide">Month view</h2>
    <?php if(isset($previousMonth)):?>
      <a href="index.php?page=overview&view=month&month=<?php echo $previousMonth . '&chosen_habit=' . $firstActiveHabit; ?>" class="main-overview-month-previous">
        <svg width="13px" height="22px" viewBox="0 0 13 22">
          <title>Link to previous month</title>
          <desc>Icon for previous month link.</desc>
          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round">
            <g transform="translate(-167.000000, -464.000000)" stroke="#2B2B2B" stroke-width="2">
              <g transform="translate(169.000000, 465.000000)">
                <polyline transform="translate(5.000000, 10.000000) rotate(-180.000000) translate(-5.000000, -10.000000) " points="0 0 10 10 0 20"></polyline>
              </g>
            </g>
          </g>
        </svg>
      </a>
    <?php endif; ?>
    <?php if(isset($nextMonth)):?>
      <a href="index.php?page=overview&view=month&month=<?php echo $nextMonth . '&chosen_habit=' . $firstActiveHabit; ?>" class="main-overview-month-next">
        <svg width="13px" height="22px" viewBox="0 0 13 22">
          <title>Link to next month</title>
          <desc>Icon for next month link.</desc>
          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round">
            <g transform="translate(-1261.000000, -464.000000)" stroke="#2B2B2B" stroke-width="2">
              <g transform="translate(169.000000, 465.000000)">
                <polyline points="1093 0 1103 10 1093 20"></polyline>
              </g>
            </g>
          </g>
        </svg>
      </a>
    <?php endif; ?>
    <time datetime="<?php echo $enteredDate->format('Y-m') ?>" class="main-overview-month-date">
      <span class="month-date-span"><?php echo $enteredDate->format('F') ?></span><span><?php echo $enteredDate->format('Y') ?></span>
    </time>
    <table class="main-overview-month-calendar">
      <?php echo $calendar ?>
    </table>
    <form method="get" class="main-overview-month-form">
      <?php foreach($activeHabits as $habit): ?>
        <input type="radio" class="month-form-input" id="<?php echo $habit['habit_id'] ?>" name="chosen_habit" value="<?php echo $habit['habit_name'] ?>" <?php if($_GET['chosen_habit'] == $habit['habit_name']) echo 'checked'; ?> required />
        <label for="<?php echo $habit['habit_id'] ?>">
          <span class="form-label"><?php echo $habit['habit_name'] ?></span>
        </label>
      <?php endforeach; ?>
      <input type="hidden" name="page" value="overview" />
      <input type="hidden" name="view" value="month" />
      <input type="hidden" name="month" value="<?php echo $enteredDate->format('m-Y'); ?>" />
      <input type="submit" value="submit" class="month-form-submit" />
    </form>
    <article class="main-overview-month-info">
      <h3 class="month-info-title hide">Info</h3>
      <p><?php if(!empty($chosenHabit)) echo $chosenHabit; ?></p>
      <p><?php if(!empty($chosenHabit)) echo 'total: ' . $totalDaysOfFulfilledHabit . ' days'; ?></p>
    </article>
  </section
<?php endif; ?>
