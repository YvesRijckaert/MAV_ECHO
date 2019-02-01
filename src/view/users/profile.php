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
      <?php foreach ($currentHabits as $habit) {
        if ($habit['active']) {
            echo '<li style="background-color:' . $habit['habit_colour'] .'"><span>' . $habit['habit_name'] . '</span>' . '<a href="index.php?page=profile&category=customize&delete-habit=' . $habit['habit_id']  .'">delete</a>' . '</li>';
        } else {
          echo '<li><a href="index.php?page=profile&category=customize&add-habit=' . $habit['habit_colour_name']  .'" style="background-color:' .  $habit['habit_colour'] .'">add habit</a></li>';
        }
      };
      ?>
      </ul>
    </article>
    <article>
      <h1>Goals</h1>
      <ul>
        <?php
          foreach ($currentGoals as $goal ) {
            if(!isset($goal['repetitive']['no-goal'])) {
              echo '<li style="background-color: ' . $goal['repetitive']['habit_colour'] . '"><span>' . $goal['repetitive']['habit_name'] . ', every ' . $goal['repetitive']['day'] . ' of ' . $goal['repetitive']['month'] . '</span>' . '<a href="index.php?page=profile&category=customize&goal-category=repetitive&delete-goal=' . $goal['repetitive']['repetitive_id']  .'"> delete</a>' . '</li>';
            } else if(!isset($goal['streaks']['no-goal'])) {
              echo '<li style="background-color: ' . $goal['streaks']['habit_colour'] . '"><span>' . $goal['streaks']['habit_name'] . ', ' . $goal['streaks']['time_amount'] . ' ' . $goal['streaks']['time_type'] . ' in a row' . '</span>' . '<a href="index.php?page=profile&category=customize&goal-category=streaks&delete-goal=' . $goal['streaks']['streak_id']  .'"> delete</a>' . '</li>';
            } else if(!isset($goal['total_amount']['no-goal'])) {
              echo '<li style="background-color: ' . $goal['total_amount']['habit_colour'] . '"><span>' . $goal['total_amount']['habit_name'] . ', ' . $goal['total_amount']['days_amount'] . ' in' . $goal['total_amount']['month'] . '</span>' . '<a href="index.php?page=profile&category=customize&goal-category=total-amount&delete-goal=' . $goal['total_amount']['total_amount_id']  .'"> delete</a>' . '</li>';
            }
            if(isset($goal['repetitive']['no-goal']) && isset($goal['streaks']['no-goal']) && isset($goal['total_amount']['no-goal'])) {
              echo '<li style="background-color: ' . $goal['repetitive']['habit_colour'] . '"><a href="index.php?page=profile&category=customize&add-goal=' . $goal['repetitive']['habit_name']  .'">Add goal for ' . $goal['repetitive']['habit_name'] . '</a></li>';
            }
          }
        ?>
      </ul>
    </article>
  </section>
  <?php endif; ?>

  <?php if ($currentStep === 'add-habit-1'): ?>
    <h1>Add habit</h1>
    <p>Choose or write down a new habit.</p>
    <form method="post">
      <?php if(!empty($errors['add-habit'])) echo '<span class="error">' . $errors['add-habit'] . '</span>';?>
      <input type="radio" id="neither" name="chosen_habit" value="neither" class="form-input" checked />
      <label for="neither">
        <span class="form-label">Write down my own habit</span>
      </label>
      <input type="text" name="custom_habit" placeholder="write down a habit" />
      <?php foreach($allPossibleHabits as $habit): ?>
        <input type="radio" id="<?php echo $habit['data_habit_name_id'] ?>" name="chosen_habit" value="<?php echo $habit['data_habit_name_id'] ?>" class="form-input" />
        <label for="<?php echo $habit['data_habit_name_id'] ?>">
          <span class="form-label"><?php echo $habit['habit_name'] ?></span>
        </label>
      <?php endforeach; ?>
      <input type="submit" name="add-habit-1" value="submit" />
    </form>
  <?php endif; ?>

  <?php if ($currentStep === 'add-habit-2'): ?>
    <h1>Add habit</h1>
    <p>Choose a shape.</p>
    <form method="post">
      <?php if(!empty($errors['add-habit-icon'])) echo '<span class="error">' . $errors['add-habit-icon'] . '</span>';?>
      <?php foreach($allPossibleHabitIcons as $icon): ?>
        <input type="radio" id="<?php echo $icon['data_habit_icon_id'] ?>" name="chosen_habit_icon" value="<?php echo $icon['data_habit_icon_id'] ?>" class="form-input" />
        <label for="<?php echo $icon['data_habit_icon_id'] ?>">
          <span class="form-label"><?php echo $icon['habit_icon'] ?></span>
        </label>
      <?php endforeach; ?>
      <input type="submit" name="add-habit-2" value="submit" />
    </form>
  <?php endif; ?>

  <?php if ($currentStep === 'add-goal-1'): ?>
    <h1>Add goal</h1>
    <p>Choose a goal type.</p>
    <ul>
      <li>
        <a href="index.php?page=profile&category=customize&add-goal=habitName&goal-type=repetitive">Repetitive</a>
        <p>e.g. habitName, every <strong>thursday</strong> of <strong>june</strong>.</p>
      </li>
      <li>
        <a href="index.php?page=profile&category=customize&add-goal=habitName&goal-type=streak">Streak</a>
        <p>e.g. habitName, <strong>10 days</strong> in a row.</p>
      </li>
      <li>
        <a href="index.php?page=profile&category=customize&add-goal=habitName&goal-type=total">Total</a>
        <p>e.g. habitName, <strong>20 days</strong> in <strong>2019</strong>.</p>
      </li>
    </ul>
  <?php endif; ?>

  <?php if ($currentStep === 'add-goal-streak'): ?>
    <h1>Add goal</h1>
    <p>Edit the goal.</p>
    <div class="well">
      <label class="input-stepper">
        <div>
          <a href="#0" role="button" id="step-decrement" class="btn btn-default" aria-label="remove 1" aria-labelledby="step-decrement label-text">
            <i aria-hidden="true" class="icon icon-minus"></i>
          </a>
          <input disabled type="text" class="text-strong form-control input-number text-center" value="1" aria-live="polite" tabindex="-1" aria-labelledby="label-text">
          <a href="#0" role="button" id="step-increment" class="btn btn-default" aria-label="add 1" aria-labelledby="step-increment label-text">
            <i aria-hidden="true" class="icon icon-plus"></i>
          </a>
        </div>
      </label>
    </div>
</div>
  <?php endif; ?>

<?php endif; ?>

<?php if ($currentCategory == 'links'): ?>
  <section>
  </section>
<?php endif; ?>

