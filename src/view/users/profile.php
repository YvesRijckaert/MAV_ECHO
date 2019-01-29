<section>
  <nav>
    <ul>
      <li class="nav-item <?php if($currentCategory === 'info') { echo 'nav-item-active';} ?>">
        <a href="index.php?page=profile&category=info">Info</a>
      </li>
      <li class="nav-item <?php if($currentCategory === 'customize') { echo 'nav-item-active';} ?>">
        <a href="index.php?page=profile&category=customize">Customize</a>
      </li>
      <li class="nav-item <?php if($currentCategory === 'links') { echo 'nav-item-active';} ?>">
        <a href="index.php?page=profile&category=links">Links</a>
      </li>
    </ul>
  </nav>
</section>

<?php if ($currentCategory == 'info') : ?>
  <section>
    <form class="update-form" method="post">
      <label>
        <span class="form-label">Email address</span>
        <input type="email" name="email" class="form-input" value="<?php echo $_SESSION['user']['email'];?>" />
        <?php if(!empty($errors['email'])) echo '<span class="error">' . $errors['email'] . '</span>';?>
      </label>
      <label>
        <span class="form-label">Name</span>
        <input type="text" name="nickname" class="form-input" value="<?php echo $_SESSION['user']['nickname'];?>" />
        <?php if(!empty($errors['nickname'])) echo '<span class="error">' . $errors['nickname'] . '</span>';?>
      </label>
      <label>
        <span class="form-label">Birthdate</span>
        <input type="date" name="birthdate" class="form-input" value="<?php echo $_SESSION['user']['birthdate'];?>" />
        <?php if(!empty($errors['birthdate'])) echo '<span class="error">' . $errors['birthdate'] . '</span>';?>
      </label>
      <input type="submit" name="update-profile" value="save" />
    </form>
  </section>
<?php endif; ?>

<?php if ($currentCategory == 'customize'): ?>
  <?php if ($currentStep === 1): ?>
  <section>
    <article>
      <h1>Habits</h1>
      <ul>
      <?php foreach ($activeHabits as $activeHabit) {
            echo '<li style="background-color:' . $activeHabit['habit_colour'] .'"><span>' . $activeHabit['habit_name'] . '</span>' . '<a href="index.php?page=profile&category=customize&delete=' . $activeHabit['habit_id']  .'">delete</a>' . '</li>';
      }
      foreach($nonActiveHabits as $nonActiveHabit) {
          echo '<a href="index.php?page=profile&category=customize&add=' . $nonActiveHabit['habit_colour_name']  .'" style="background-color:' .  $nonActiveHabit['habit_colour'] .'">add habit</a>';
      } ?>
      </ul>
    </article>
    <article>
      <h1>Goals</h1>
    </article>
  </section>
  <?php endif; ?>

  <?php if ($currentStep === 'add-habit-2'): ?>
    <h1>Add habit</h1>
  <?php endif; ?>

<?php endif; ?>

<?php if ($currentCategory == 'links'): ?>
  <section>
  </section>
<?php endif; ?>

