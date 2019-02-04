<nav class="main-nav">
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
  <a href="index.php?page=add" class="">Add new day</a>
<?php else: ?>
  <a href="index.php?page=add" class="main-green-button">Change your day</a>
<?php endif; ?>

<?php if($view == 'day') : ?>
  <p class="main-overview-day-date"><?php echo $currentDay; ?></p>
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
      <img src="../../assets/img/collage-test.png" alt="collage" class="test-img" />
    </section>
    <?php if(!empty($fulfilledHabitsOfEnteredDay)): ?>
      <ul class="main-overview-day-habits">
        <?php foreach($fulfilledHabitsOfEnteredDay as $habit): ?>
        <li><?php echo $habit['habit_name'] ?></li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>
    <?php switch ($postOfEnteredDay['feelings']) {
      case -1:
        echo'
        <svg width="86px" height="86px" viewBox="0 0 86 86">
          <title>Group 6</title>
          <desc>Created with Sketch.</desc>
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
        <svg width="84px" height="84px" viewBox="0 0 84 84">
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
        <svg width="86px" height="86px" viewBox="0 0 86 86">
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
  <?php else: ?>
    <p class="error">Nothing available for this day.</p>
  <?php endif; ?>
<?php endif; ?>

<?php if($view == 'month') : ?>
<section>
  <header>
    <?php if(isset($previousMonth)):?>
    <a href="index.php?page=overview&view=month&month=<?php echo $previousMonth . '&chosen_habit=' . $firstActiveHabit; ?>">←</a>
    <?php endif; ?>
    <p><?php echo $enteredDate->format('F Y'); ?></p>
    <?php if(isset($nextMonth)):?>
    <a href="index.php?page=overview&view=month&month=<?php echo $nextMonth . '&chosen_habit=' . $firstActiveHabit; ?>">→</a>
    <?php endif; ?>
  </header>
</section>
<section class="calendar-section">
  <?php echo $calendar ?>
</section>
<form method="get" class="calendar-habits-form">
  <?php foreach($activeHabits as $habit): ?>
    <input type="radio" class="calendar-habits-button" id="<?php echo $habit['habit_id'] ?>" name="chosen_habit" value="<?php echo $habit['habit_name'] ?>" class="form-input" <?php if($_GET['chosen_habit'] == $habit['habit_name']) echo 'checked'; ?> required />
    <label for="<?php echo $habit['habit_id'] ?>">
      <span class="form-label"><?php echo $habit['habit_name'] ?></span>
    </label>
  <?php endforeach; ?>
  <input type="hidden" name="page" value="overview" />
  <input type="hidden" name="view" value="month" />
  <input type="hidden" name="month" value="<?php echo $enteredDate->format('m-Y'); ?>" />
  <input type="submit" value="submit" class="calendar-habits-submit" />
</form>
<p><?php if(!empty($chosenHabit)) echo $chosenHabit; ?></p>
<p><?php if(!empty($chosenHabit)) echo 'total: ' . $totalDaysOfFulfilledHabit . ' days'; ?></p>
<?php endif; ?>
