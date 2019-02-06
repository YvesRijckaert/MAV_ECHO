<section class="main-overview-add" id="main">
  <h2 class="main-overview-add-title">add day</h2>
  <p class="main-overview-add-subtitle">Current date: <?php echo date("d/m/Y") ?></p>
  <a href="index.php?page=overview&view=day&day=<?php echo date("d-m-Y")?>" class="main-overview-add-back">
    <svg width="30px" height="23px" viewBox="0 0 30 23">
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
    <fieldset class="add-day-form-field">
      <legend class="add-day-form-field-legend">mood</legend>
      <?php if(!empty($errors['feelings'])) echo '<span class="error">' . $errors['feelings'] . '</span>';?>
      <input type="radio" name="feelings" id="feeling-great" value="feeling-great" <?php if(isset($feelings) && $feelings === 1) echo 'checked'; ?> required />
      <label for="feeling-great">
        <span>great</span>
      </label>
      <input type="radio" name="feelings" id="feeling-okay" value="feeling-okay" <?php if(isset($feelings) && $feelings === 0) echo 'checked'; ?> required />
      <label for="feeling-okay">
        <span>okay</span>
      </label>
      <input type="radio" name="feelings" id="feeling-bad" value="feeling-bad" <?php if(isset($feelings) && $feelings === -1) echo 'checked'; ?> required />
      <label for="feeling-bad">
        <span>bad</span>
      </label>
    </fieldset>
    <fieldset class="add-day-form-field">
      <legend class="add-day-form-field-legend">about</legend>
      <?php if(!empty($errors['short-memory'])) echo '<span class="error">' . $errors['short-memory'] . '</span>';?>
      <label>
        <textarea class="form-input" name="short-memory" cols="40" rows="6" maxlength="255" required><?php if(!empty($short_memory)) { echo $short_memory; } else { echo 'What do you want to remember from this day?'; } ?></textarea>
      </label>
    </fieldset>
    <fieldset class="add-day-form-field">
      <legend class="add-day-form-field-legend">habits</legend>
      <?php foreach($habits as $habit): ?>
        <label for="<?php echo $habit['habit_id'] ?>">
          <span class="form-label"><?php echo $habit['habit_name'] ?></span>
          <input type="checkbox" id="<?php echo $habit['habit_id'] ?>" name="habits[]" value="<?php echo $habit['habit_name'] ?>" class="form-input" <?php if(!empty($fulfilled_habits_ids) && in_array($habit['habit_id'], $fulfilled_habits_ids)) echo 'checked'; ?> />
        </label>
      <?php endforeach; ?>
    </fieldset>
    <input type="submit" name="add-day" value="save" />
  </form>
</section>
