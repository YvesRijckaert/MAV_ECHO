<section class="main-overview-add" id="main">
  <h2 class="main-overview-add-title"><?php if(empty($alreadyPostedToday)) { echo 'add day'; } else { echo 'change day'; }?></h2>
  <p class="main-overview-add-subtitle">Current day: <?php echo date("d/m/Y") ?></p>
  <a href="index.php?page=overview&view=day&day=<?php echo date("d-m-Y")?>" class="main-overview-add-back">
    <svg width="20px" height="23px" viewBox="0 0 30 23">
      <title>Back button</title>
      <desc>Icon for back button.</desc>
      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g transform="translate(-49.000000, -126.000000)">
          <g transform="translate(52.000000, 128.000000)">
            <polyline stroke="#2b2b2b" stroke-width="3" stroke-linecap="round" transform="translate(4.736757, 9.473513) rotate(-180.000000) translate(-4.736757, -9.473513) " points="0 0 9.47351317 9.47351317 0 18.9470263"></polyline>
            <rect fill="#2b2b2b" x="1.58823529" y="7.94117647" width="25.4117647" height="3" rx="1.5"></rect>
          </g>
        </g>
      </g>
    </svg>
  </a>
  <form class="add-day-form" method="post">
    <fieldset class="add-day-form-field add-day-form-field-mood">
      <legend class="add-day-form-field-legend">mood</legend>
      <?php if(!empty($errors['feelings'])) echo '<span class="error">' . $errors['feelings'] . '</span>';?>
      <input type="radio" class="add-day-form-field-radio" name="feelings" id="feeling-great" value="feeling-great" <?php if(isset($feelings) && $feelings === 1) echo 'checked'; ?> required />
      <label class="add-day-form-field-label-great" for="feeling-great">
        <svg width="86px" height="86px" viewBox="0 0 86 86" class="day-info-mood-img">
          <title>Good mood</title>
          <desc>Icon for good mood.</desc>
          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g transform="translate(-1090.000000, -243.000000)">
              <g transform="translate(1091.000000, 244.000000)">
                  <circle class="great-circle" stroke="#00D28B" stroke-width="1.2" cx="42" cy="42" r="42"></circle>
                  <g transform="translate(28.800000, 46.800000)">
                    <rect x="0" y="0" width="38.4" height="18" rx="2.4"></rect>
                    <path class="great-smile" fill="#00D28B" d="M-3.55271368e-15,0 L38.4,0 C38.4,9.9411255 29.8038672,18 19.2,18 C8.5961328,18 -3.55271368e-15,9.9411255 -3.55271368e-15,0 Z" fill="#FFFFFF"></path>
                  </g>
                  <text class="great-text" font-family="CircularStd-Medium, Circular Std" font-size="24" font-weight="400" fill="#00D28B">
                    <tspan x="12" y="39.6">great</tspan>
                  </text>
                </g>
              </g>
            </g>
        </svg>
      </label>
      <input type="radio" class="add-day-form-field-radio" name="feelings" id="feeling-okay" value="feeling-okay" <?php if(isset($feelings) && $feelings === 0) echo 'checked'; ?> required />
      <label class="add-day-form-field-label-okay" for="feeling-okay">
        <svg width="86px" height="86px" viewBox="0 0 86 86">
          <title>Okay mood</title>
          <desc>Icon for okay mood.</desc>
          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g transform="translate(-1191.000000, -236.000000)">
              <g transform="translate(1192.000000, 237.000000)">
                <circle class="okay-circle" stroke="#4285FF" stroke-width="1.20059945" cx="42.0209807" cy="42.0209807" r="42.0209807"></circle>
                <rect class="okay-smile" fill="#4285FF" x="24.011989" y="46.8233785" width="36.0179834" height="8.40419614" rx="4.20209807"></rect>
                <text class="okay-text" font-family="CircularStd-Medium, Circular Std" font-size="24.011989" font-weight="400" fill="#4285FF">
                  <tspan x="27.6137873" y="39.6077928">ok</tspan>
                </text>
              </g>
            </g>
          </g>
        </svg>
      </label>
      <input type="radio" class="add-day-form-field-radio" name="feelings" id="feeling-bad" value="feeling-bad" <?php if(isset($feelings) && $feelings === -1) echo 'checked'; ?> required />
      <label class="add-day-form-field-label-bad" for="feeling-bad">
        <svg width="86px" height="86px" viewBox="0 0 86 86" class="day-info-mood-img">
          <title>Bad mood</title>
          <desc>Icon for bad mood.</desc>
          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g transform="translate(-1305.000000, -244.000000)">
              <g transform="translate(1091.000000, 241.000000)">
                <g transform="translate(215.000000, 4.000000)">
                  <circle class="bad-circle" stroke="#FE5455" stroke-width="1.196345"  cx="41.872075" cy="41.872075" r="41.872075"></circle>
                  <g transform="translate(21.534210, 15.552485)">
                    <g transform="translate(2.392690, 31.104970)">
                      <rect id="path-1" x="0" y="0" width="38.28304" height="17.945175" rx="2.39269"></rect>
                      <path class="bad-smile" fill="#FF5257" d="M-1.0658141e-14,0 L38.28304,0 C38.28304,9.91084648 29.7130896,17.945175 19.14152,17.945175 C8.56995042,17.945175 -3.55271368e-15,9.91084648 -3.55271368e-15,0 Z" fill="#FFFFFF" transform="translate(19.141520, 8.972588) rotate(-180.000000) translate(-19.141520, -8.972588) "></path>
                    </g>
                    <text class="bad-text" font-family="CircularStd-Medium, Circular Std" font-size="23.9269" font-weight="400" fill="#FF5257">
                      <tspan x="0" y="24">bad</tspan>
                    </text>
                  </g>
                </g>
              </g>
            </g>
          </g>
        </svg>
      </label>
    </fieldset>
    <fieldset class="add-day-form-field add-day-form-field-about">
      <legend class="add-day-form-field-legend">about</legend>
      <?php if(!empty($errors['short-memory'])) echo '<span class="error">' . $errors['short-memory'] . '</span>';?>
      <label>
        <textarea class="add-day-form-field-textarea" name="short-memory" cols="40" rows="6" maxlength="255" placeholder="What do you want to remember from this day?" required><?php if(!empty($short_memory)) { echo $short_memory; } ?></textarea>
      </label>
    </fieldset>
    <fieldset class="add-day-form-field add-day-form-field-habits">
      <legend class="add-day-form-field-legend">habits</legend>
      <?php if(!empty($habits)): ?>
      <?php foreach($habits as $habit): ?>
        <input type="checkbox" class="month-form-input-radio" id="<?php echo $habit['habit_id'] ?>" name="habits[]" value="<?php echo $habit['habit_name'] ?>" class="form-input" <?php if(!empty($fulfilled_habits_ids) && in_array($habit['habit_id'], $fulfilled_habits_ids)) echo 'checked'; ?> />
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
      <?php else: ?>
        <p class="add-day-form-empty">no habits, add some <a href="index.php?page=profile&category=customize">here</a></p>
      <?php endif; ?>

    </fieldset>
    <label class="add-day-form-submit">
      <input type="submit" class="add-day-form-submit-button" name="add-day" value="save" />
      <svg width="22px" height="16px" viewBox="0 0 22 16">
        <title>Done button</title>
        <desc>Icon for done button.</desc>
        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g transform="translate(-1294.000000, -742.000000)" stroke="#FFFFFF" stroke-linecap="round" stroke-width="2.4">
            <polyline points="1296 750.267785 1301.81878 756 1314 744"></polyline>
          </g>
        </g>
      </svg>
      <span><?php if(empty($alreadyPostedToday)) { echo 'add'; } else { echo 'save'; }?></span>
    </label>
  </form>
</section>
