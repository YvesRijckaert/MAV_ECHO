<!-- NAVIGATION -->
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
    <a href="index.php?page=overview&view=month&month=<?php echo $previousMonth . '&chosen_habit=' . $firstActiveHabit; ?>">←</a>
    <?php endif; ?>
    <p><?php echo $enteredDate->format('F Y'); ?></p>
    <?php if(isset($nextMonth)):?>
    <a href="index.php?page=overview&view=month&month=<?php echo $nextMonth . '&chosen_habit=' . $firstActiveHabit; ?>">→</a>
    <?php endif; ?>
  </header>
</section>
<?php echo $calendar ?>
<form method="get" class="calendar-habits-form">
  <?php foreach($activeHabits as $habit): ?>
    <label for="<?php echo $habit['habit_id'] ?>">
      <span class="form-label"><?php echo $habit['habit_name'] ?></span>
      <input type="radio" class="calendar-habits-button" id="<?php echo $habit['habit_id'] ?>" name="chosen_habit" value="<?php echo $habit['habit_name'] ?>" class="form-input" />
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


<?php if(empty($alreadyPostedToday)): ?>
  <a href="index.php?page=add">Add new day</a>
<?php else: ?>
  <a href="index.php?page=add">Change your day</a>
<?php endif; ?>
