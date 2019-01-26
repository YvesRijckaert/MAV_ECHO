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
<!-- show all the days in navigation -->
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
  </dl>
  <?php else: ?>
  <!-- if no: show static HTML: 'no entry for this day' -->
  <p class="error">Nothing available for this day.</p>
  <?php endif; ?>
</section>

<!-- show number of days that you've lived -->
<?php endif; ?>


<!-- MONTH VIEW -->
<?php if($view == 'month') : ?>
<!-- show calendar -->
<!-- highlight current day in calendar -->
<!-- show all the habits as radio buttons  -->
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
