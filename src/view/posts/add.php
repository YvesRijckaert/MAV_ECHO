<section>
  <form class="add-day-form" method="post">
    <label>
      <span class="form-label">What do you want to remember from this day?</span>
      <textarea class="form-input" name="short-memory" cols="30" rows="10" maxlength="255" <?php if(!empty($_POST['short-memory'])) echo 'value="' . $_POST['short-memory'] . '"';?>></textarea>
      <?php if(!empty($errors['short-memory'])) echo '<span class="error">' . $errors['short-memory'] . '</span>';?>
    </label>
    <?php foreach($habits as $habit): ?>
    <label for="<?php echo $habit['habit_id'] ?>">
      <span class="form-label"><?php echo $habit['habit_name'] ?></span>
      <input type="checkbox" id="<?php echo $habit['habit_id'] ?>" name="habits" value="<?php echo $habit['habit_name'] ?>" class="form-input" />
    </label>
    <?php endforeach; ?>
    <input type="submit" name="register2" value="next step" />
  </form>
</section>
