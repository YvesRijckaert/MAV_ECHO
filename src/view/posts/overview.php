<section>
  <nav>
    <ul>
      <li class="nav-item <?php if($view === 'day') { echo 'nav-item-active';} ?>">
        <a href="index.php?page=overview&view=day&day=<?php echo date("d-m-Y") ?>">Day</a>
      </li>
      <li class="nav-item <?php if($view === 'month') { echo 'nav-item-active';} ?>">
        <a href="index.php?page=overview&view=month&month=<?php echo date("m-Y")?>">Month</a>
      </li>
    </ul>
  </nav>
</section>

<!-- DAY VIEW -->
<?php if($view == 'day') : ?>
<section>
  <header>
    <?php if(isset($previousDay)):?>
    <a href="index.php?page=overview&view=day&day=<?php echo $previousDay; ?>">←</a>
    <?php endif; ?>
    <p><?php echo $currentDay; ?></p>
    <?php if(isset($nextDay)):?>
    <a href="index.php?page=overview&view=day&day=<?php echo $nextDay; ?>">→</a>
    <?php endif; ?>
  </header>
</section>
<section>
  <?php if(!empty($postOfEnteredDay)): ?>
  <dl>
    <dt>Short memory:</dt>
    <dd><?php echo $postOfEnteredDay['short_memory'] ?></dd>
    <?php if(!empty($fulfilledHabitsOfEnteredDay)): ?>
    <dt>Fulfilled habits:</dt>
    <dd>
      <ul>
        <?php foreach($fulfilledHabitsOfEnteredDay as $habit): ?>
        <li><?php echo $habit['habit_name'] ?></li>
        <?php endforeach; ?>
      </ul>
    </dd>
    <?php endif; ?>
    <dd>Number of days that you've lived:</dd>
    <dt><?php echo $livedDaysAmount ?></dt>
  </dl>
  <?php else: ?>
  <p class="error">Nothing available for this day.</p>
  <?php endif; ?>
</section>
<?php endif; ?>


<!-- MONTH VIEW -->
<?php if($view == 'month') : ?>
<section>
  <header>
    <?php if(isset($previousMonth)):?>
    <a href="index.php?page=overview&view=month&month=<?php echo $previousMonth; ?>">←</a>
    <?php endif; ?>
    <p><?php echo $currentMonth; ?></p>
    <?php if(isset($nextMonth)):?>
    <a href="index.php?page=overview&view=month&month=<?php echo $nextMonth; ?>">→</a>
    <?php endif; ?>
  </header>
</section>
<!-- show calendar -->
<?php echo $calendar ?>
<!-- show all the active habits as radio buttons  -->
<form method="post">
  <?php foreach($activeHabits as $habit): ?>
    <label for="<?php echo $habit['habit_id'] ?>">
      <span class="form-label"><?php echo $habit['habit_name'] ?></span>
      <input type="radio" id="<?php echo $habit['habit_id'] ?>" name="chosen_habit" value="<?php echo $habit['habit_name'] ?>" class="form-input" />
    </label>
  <?php endforeach; ?>
  <?php if(!empty($errors['chosen_habit'])) echo '<span class="error">' . $errors['chosen_habit'] . '</span>';?>
  <input type="submit" name="show-habit" value="submit" />
</form>
<!-- highlight chosen habit in calendar if that habit exists for that daily post entry  -->
<?php endif; ?>


<!-- check if already made a day entry today -->
<!-- if yes: change day button -->
<!-- if no: add new day button -->
<?php if(empty($alreadyPostedToday)): ?>
  <a href="index.php?page=add">Add new day</a>
<?php else: ?>
  <a href="index.php?page=add">Change your day</a>
<?php endif; ?>
