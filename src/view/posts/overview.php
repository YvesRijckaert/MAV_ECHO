<section>
  <nav>
    <ul>
      <li class="nav-item <?php if($view === 'day') { echo 'nav-item-active';} ?>">
        <a href="index.php?page=overview&view=day&day=<?php echo date("d-m-Y") ?>">Day</a>
      </li>
      <li class="nav-item <?php if($view === 'month') { echo 'nav-item-active';} ?>">
        <a href="index.php?page=overview&view=month">Month</a>
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
    <a href="index.php?page=overview&view=day&day=<?php if(isset($nextDay)) echo $nextDay; ?>">→</a>
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
<!-- show calendar -->
<?php echo $calendar ?>
<!-- show all the active habits as radio buttons  -->
<form>
  <?php foreach($activeHabits as $habit): ?>
    <label for="<?php echo $habit['habit_id'] ?>">
      <span class="form-label"><?php echo $habit['habit_name'] ?></span>
      <input type="radio" id="<?php echo $habit['habit_id'] ?>" name="chosenHabit" value="<?php echo $habit['habit_name'] ?>" class="form-input" />
    </label>
  <?php endforeach; ?>
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
