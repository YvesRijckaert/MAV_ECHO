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

<?php if($view == 'day') : ?>
  <section class="main-overview-day" id="main">
    <h2 class="main-overview-day-title hide">Day view</h2>
    <?php if(isset($previousDay)):?>
      <a href="index.php?page=overview&view=day&day=<?php echo $previousDay; ?>" class="main-overview-day-previous">
        <svg width="13px" height="22px" viewBox="0 0 13 22">
          <title>Link to previous day</title>
          <desc>Icon for previous day link.</desc>
          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round">
            <g transform="translate(-167.000000, -464.000000)" stroke="#2b2b2b" stroke-width="2">
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
            <g transform="translate(-1261.000000, -464.000000)" stroke="#2b2b2b" stroke-width="2">
              <g transform="translate(169.000000, 465.000000)">
                <polyline points="1093 0 1103 10 1093 20"></polyline>
              </g>
            </g>
          </g>
        </svg>
      </a>
    <?php endif; ?>
    <?php if(!empty($postOfEnteredDay)): ?>
      <time datetime="<?php echo $currentDateHTML ?>" class="main-overview-day-date-mobile"><?php echo $currentDate ?></time>
      <section class="main-overview-day-collage">
        <h3 class="day-collage-title hide">Day view collage</h3>
        <svg width="360px" height="540px" viewBox="0 0 360 540">
          <title>Collage</title>
          <desc>Collage of the day.</desc>
          <?php if(!empty($fulfilledHabitsOfEnteredDay)): ?>
            <g style="opacity: <?php switch ($postOfEnteredDay['feelings']) {
              case -1:
                echo '.5';
                break;
              case 0:
                echo '.75';
                break;
              case 1:
                echo '1';
                break;
              default:
                echo '1';
                break;
            }  ?>">
              <?php foreach($fulfilledHabitsOfEnteredDay as $habit): ?>
                <g class="day-collage-habit-icon" fill="<?php echo $habit['habit_colour'] ?>">
                  <?php echo $habit['habit_icon']; ?>
                </g>
              <?php endforeach; ?>
            </g>
          <?php endif; ?>
          <g class="textbox">
            <rect fill="#ffffff" x="90" y="90" width="182" height="367"></rect>
            <text font-family="Circular Std" font-size="16" font-style="italic" font-weight="300" fill="#2b2b2b">
              <tspan x="100" y="172">#<?php echo $livedDaysAmount; ?></tspan>
            </text>
            <text font-family="Circular Std" font-size="18" font-weight="400" line-spacing="24" fill="#2b2b2b">
              <?php $count = 200; $splittedMemory = explode( "\n", wordwrap( $postOfEnteredDay['short_memory'], 15));
              foreach ($splittedMemory as $key => $splittedMemory):
                $count+= 22;
                echo '<tspan x="100" y=' . $count  . '>' . $splittedMemory . '</tspan>';
              endforeach;
              ?>
            </text>
          </g>
        </svg>
      </section>
      <section class="main-overview-day-info" id="open-modal">
        <a href="#" class="main-overview-day-close-modal">
        <svg width="50px" height="50px" viewBox="0 0 50 50" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <title>Close info</title>
            <desc>Icon for close info.</desc>
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <rect fill="#ffffff" x="23" y="23" width="4" height="10" rx="2"></rect>
              <rect id="Rectangle-Copy" fill="#FFFFFF" x="23" y="17" width="4" height="4" rx="2"></rect>
              <circle id="Oval-Copy" fill="#2B2B2B" cx="25" cy="25" r="25"></circle>
              <path d="M25,19 L25,31" id="Path-21" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" transform="translate(25.000000, 25.000000) rotate(-315.000000) translate(-25.000000, -25.000000) "></path>
              <path d="M25,19.2857143 L25,30.7142857" id="Path-21-Copy" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" transform="translate(25.000000, 25.000000) rotate(-225.000000) translate(-25.000000, -25.000000) "></path>
            </g>
        </svg>
        </a>
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
              <li class="day-info-habits-list-item" style="background-color: <?php echo $habit['habit_colour'] ?>">
                <span class="day-info-habits-list-item-icon">
                  <svg width="30px" height="30px" viewbox="0 0 180 180">
                    <g fill="#ffffff" stroke="none" stroke-width="1" fill-rule="evenodd">
                      <?php echo $habit['habit_icon'] ?>
                    </g>
                  </svg>
                </span>
                <span><?php echo $habit['habit_name'] ?></span>
              </li>
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
              <svg width="86px" height="86px" viewBox="0 0 86 86">
                <title>Okay mood</title>
                <desc>Icon for okay mood.</desc>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1191.000000, -236.000000)">
                    <g transform="translate(1192.000000, 237.000000)">
                      <circle stroke="#4285FF" stroke-width="1.20059945" fill="#4285FF" cx="42.0209807" cy="42.0209807" r="42.0209807"></circle>
                      <rect fill="#FFFFFF" x="24.011989" y="46.8233785" width="36.0179834" height="8.40419614" rx="4.20209807"></rect>
                      <text font-family="CircularStd-Medium, Circular Std" font-size="24.011989" font-weight="400" fill="#FFFFFF">
                        <tspan x="27.6137873" y="39.6077928">ok</tspan>
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
      <a class="main-overview-day-open-modal" href="#open-modal">
        <svg width="50px" height="50px" viewBox="0 0 50 50">
          <title>Open info</title>
          <desc>Icon for open info.</desc>
          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <circle fill="#2b2b2b" cx="25" cy="25" r="25"></circle>
            <rect fill="#ffffff" x="23" y="23" width="4" height="10" rx="2"></rect>
            <rect fill="#ffffff" x="23" y="17" width="4" height="4" rx="2"></rect>
          </g>
        </svg>
      </a>
    <?php else: ?>
      <time datetime="<?php echo $currentDateHTML ?>" class="main-overview-day-date-mobile"><?php echo $currentDate ?></time>
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
            <g transform="translate(-167.000000, -464.000000)" stroke="#2b2b2b" stroke-width="2">
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
            <g transform="translate(-1261.000000, -464.000000)" stroke="#2b2b2b" stroke-width="2">
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
        <input type="radio" class="month-form-input month-form-input-radio" id="<?php echo $habit['habit_id'] ?>" name="chosen_habit" value="<?php echo $habit['habit_name'] ?>" <?php if($_GET['chosen_habit'] == $habit['habit_name']) echo 'checked'; ?> required />
        <label for="<?php echo $habit['habit_id'] ?>" class="month-form-label month-form-label-<?php echo $habit['habit_colour_name'] ?>">
          <span class="month-habit-item-icon-white">
            <svg width="30px" height="30px" viewbox="0 0 180 180">
              <g fill="#ffffff" stroke="none" stroke-width="1" fill-rule="evenodd">
                <?php echo $habit['habit_icon'] ?>
              </g>
            </svg>
          </span>
          <span class="month-habit-item-icon">
            <svg width="30px" height="30px" viewbox="0 0 180 180">
              <g fill="<?php echo $habit['habit_colour'] ?>" stroke="none" stroke-width="1" fill-rule="evenodd">
                <?php echo $habit['habit_icon'] ?>
              </g>
            </svg>
          </span>
          <span class="month-habit-item-name"><?php echo $habit['habit_name'] ?></span>
        </label>
      <?php endforeach; ?>
      <input type="hidden" name="page" value="overview" />
      <input type="hidden" name="view" value="month" />
      <input type="hidden" name="month" value="<?php echo $enteredDate->format('m-Y'); ?>" />
      <input type="submit" value="submit" class="month-form-submit" />
    </form>
    <article class="main-overview-month-info">
      <h3 class="month-info-title hide">Info</h3>
      <p class="month-info-chosenHabit"><?php if(!empty($chosenHabit)) echo $chosenHabit; ?></p>
      <p class="month-info-totalDays"><?php if(!empty($chosenHabit)) { if($totalDaysOfFulfilledHabit == 1) { echo 'total: ' . $totalDaysOfFulfilledHabit . ' day'; } else { echo 'total: ' . $totalDaysOfFulfilledHabit . ' days'; } }?></p>
    </article>
  </section
<?php endif; ?>
