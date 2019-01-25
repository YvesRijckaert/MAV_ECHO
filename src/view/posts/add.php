<section>
  <p>Current date: <?php echo date("d/m/Y") ?></p>
  <form class="add-day-form" method="post">
    <label>
      <span class="form-label">What do you want to remember from this day?</span>
      <textarea class="form-input" name="short-memory" cols="30" rows="10" maxlength="255"><?php if(!empty($_POST['short-memory'])) echo $_POST['short-memory'];?><?php if(!empty($short_memory)) echo $short_memory ?></textarea>
      <?php if(!empty($errors['short-memory'])) echo '<span class="error">' . $errors['short-memory'] . '</span>';?>
    </label>
    <label for="feeling-great">
      <span>great</span>
      <input type="radio" name="feelings" id="feeling-great" value="feeling-great" <?php if(isset($feelings) && $feelings === 1) echo 'checked'; ?> />
    </label>
    <label for="feeling-okay">
      <span>okay</span>
      <input type="radio" name="feelings" id="feeling-okay" value="feeling-okay" <?php if(isset($feelings) && $feelings === 0) echo 'checked'; ?> />
    </label>
    <label for="feeling-bad">
      <span>bad</span>
      <input type="radio" name="feelings" id="feeling-bad" value="feeling-bad" <?php if(isset($feelings) && $feelings === -1) echo 'checked'; ?> />
    </label>
    <?php if(!empty($errors['feelings'])) echo '<span class="error">' . $errors['feelings'] . '</span>';?>
    <?php foreach($habits as $habit): ?>
    <label for="<?php echo $habit['habit_id'] ?>">
      <span class="form-label"><?php echo $habit['habit_name'] ?></span>
      <input type="checkbox" id="<?php echo $habit['habit_id'] ?>" name="habits[]" value="<?php echo $habit['habit_name'] ?>" class="form-input" <?php if(!empty($fulfilled_habits_ids) && in_array($habit['habit_id'], $fulfilled_habits_ids)) echo 'checked'; ?> />
    </label>
    <?php endforeach; ?>
    <input type="submit" name="add-day" value="save" />
  </form>
</section>
