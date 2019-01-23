<section>
  <p>Current date: <?php echo $current_date ?></p>
  <form class="add-day-form" method="post">
    <label>
      <span class="form-label">What do you want to remember from this day?</span>
      <textarea class="form-input" name="short-memory" cols="30" rows="10" maxlength="255"><?php if(!empty($_POST['short-memory'])) echo $_POST['short-memory'];?></textarea>
      <?php if(!empty($errors['short-memory'])) echo '<span class="error">' . $errors['short-memory'] . '</span>';?>
    </label>
    <label>
      <span class="form-label">Rate your happiness today</span>
      <input type="range" name="happiness-ratio" class="form-input" min="0" max="10" step="1" <?php if(!empty($_POST['happiness-ratio'])) echo 'value="' . $_POST['happiness-ratio'] . '"';?> />
      <?php if(!empty($errors['happiness-ratio'])) echo '<span class="error">' . $errors['happiness-ratio'] . '</span>';?>
    </label>
    <?php foreach($habits as $habit): ?>
    <label for="<?php echo $habit['habit_id'] ?>">
      <span class="form-label"><?php echo $habit['habit_name'] ?></span>
      <input type="checkbox" id="<?php echo $habit['habit_id'] ?>" name="habits[]" value="<?php echo $habit['habit_name'] ?>" class="form-input" />
    </label>
    <?php endforeach; ?>
    <input type="submit" name="add-day" value="save" />
  </form>
</section>
