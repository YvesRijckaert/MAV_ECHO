<nav class="main-nav">
  <h2 class="main-nav-title hide">Progress navigation</h2>
  <ul class="main-nav-ul <?php echo 'active-category-' . $currentCategory; ?>">
    <li class="main-nav-item main-nav-item-stats <?php if($currentCategory === 'statistics') { echo 'main-nav-item-active';} ?>">
      <a href="index.php?page=progress&category=statistics" class="main-nav-item-link">stats</a>
    </li>
    <li class="main-nav-item main-nav-item-achievements <?php if($currentCategory === 'achievements') { echo 'main-nav-item-active';} ?>">
      <a href="index.php?page=progress&category=achievements" class="main-nav-item-link">achievements</a>
    </li>
    <li class="main-nav-item main-nav-item-goals <?php if($currentCategory === 'goals') { echo 'main-nav-item-active';} ?>">
      <a href="index.php?page=progress&category=goals&goals-type=in-progress" class="main-nav-item-link">goals</a>
    </li>
  </ul>
</nav>

<?php if ($currentCategory == 'statistics'): ?>
  <section>
  </section>
<?php endif; ?>

<?php if ($currentCategory == 'achievements'): ?>
  <section class="main-progress-achievements" id="main">
    <h2 class="main-progress-achievements-title hide">Achievements</h2>
    <ul class="main-progress-achievements-list">
      <li class="achievements-list-item">
        <h3 class="achievements-list-item-title">The first steps</h3>
        <p class="achievements-list-item-desc">enter down your first day</p>
      </li>
      <li class="achievements-list-item">
        <h3 class="achievements-list-item-title">Golazo</h3>
        <p class="achievements-list-item-desc">complete your first goal</p>
      </li>
      <li class="achievements-list-item">
        <h3 class="achievements-list-item-title">Lucky three</h3>
        <p class="achievements-list-item-desc">enter three days in a row</p>
      </li>
      <li class="achievements-list-item">
        <h3 class="achievements-list-item-title">Lucky three</h3>
        <p class="achievements-list-item-desc">enter three days in a row</p>
      </li>
      <li class="achievements-list-item">
        <h3 class="achievements-list-item-title">Lucky three</h3>
        <p class="achievements-list-item-desc">enter three days in a row</p>
      </li>
      <li class="achievements-list-item">
        <h3 class="achievements-list-item-title">Lucky three</h3>
        <p class="achievements-list-item-desc">enter three days in a row</p>
      </li>
      <li class="achievements-list-item">
        <h3 class="achievements-list-item-title">Lucky three</h3>
        <p class="achievements-list-item-desc">enter three days in a row</p>
      </li>
      <li class="achievements-list-item">
        <h3 class="achievements-list-item-title">Lucky three</h3>
        <p class="achievements-list-item-desc">enter three days in a row</p>
      </li>
      <li class="achievements-list-item">
        <h3 class="achievements-list-item-title">Lucky three</h3>
        <p class="achievements-list-item-desc">enter three days in a row</p>
      </li>
      <li class="achievements-list-item">
        <h3 class="achievements-list-item-title">Lucky three</h3>
        <p class="achievements-list-item-desc">enter three days in a row</p>
      </li>
    </ul>
  </section>
<?php endif; ?>

<?php if ($currentCategory == 'goals'): ?>
  <section class="main-progress-goals" id="main">
    <h2 class="main-progress-goals-title hide">Goals</h2>
    <a href="index.php?page=profile&category=customize">edit</a>
    <nav class="main-progress-goals-nav">
      <h3 class="goals-nav-title hide">Goals navigation</h3>
      <ul class="goals-nav-list">
        <li class="goals-nav-list-item">
          <a href="index.php?page=progress&category=goals&goals-type=in-progress" class="goals-nav-list-item-link <?php if($goalsCategory === 'in-progress') { echo 'goals-nav-list-item-link-active';} ?>">in progress</a>
        </li>
        <li class="goals-nav-list-item">
          <a href="index.php?page=progress&category=goals&goals-type=completed" class="goals-nav-list-item-link <?php if($goalsCategory === 'completed') { echo 'goals-nav-list-item-link-active';} ?>">completed</a>
        </li>
      </ul>
    </nav>
    <?php if($goalsCategory === 'in-progress'): ?>
      <article class="main-progress-goals-in-progress">
        <h3 class="goals-in-progress-title hide">In Progress goals</h3>
        <?php
          echo '<ul class="goals-in-progress-list">';
          if (!empty($inProgressGoals['repetitive'])) {
            foreach ($inProgressGoals['repetitive'] as $goal) {
              echo '<li class="goals-in-progress-list-item" style="background-color: ' . $goal['habit_colour'] .'"><div class="goals-in-progress-list-item-topwrap"><p class="goals-in-progress-list-item-name">' . $goal['habit_name'] .'</p><p class="goals-in-progress-list-item-status">2 days</p></div><p class="goals-in-progress-list-item-amount">every ' . $goal['day'] .' of ' . $goal['month'] .'</p></li>';
            }
          }
          if (!empty($inProgressGoals['streaks'])) {
            foreach ($inProgressGoals['streaks'] as $goal) {
              echo '<li class="goals-in-progress-list-item" style="background-color: ' . $goal['habit_colour'] .'"><div class="goals-in-progress-list-item-topwrap"><p class="goals-in-progress-list-item-name">' . $goal['habit_name'] .'</p><p class="goals-in-progress-list-item-status">2 days</p></div><p class="goals-in-progress-list-item-amount">' . $goal['time_amount'] . ' ' . $goal['time_type'] .' in a row</p></li>';
            }
          }
          if (!empty($inProgressGoals['total_amount'])) {
            foreach ($inProgressGoals['total_amount'] as $goal) {
              echo '<li class="goals-in-progress-list-item" style="background-color: ' . $goal['habit_colour'] .'"><div class="goals-in-progress-list-item-topwrap"><p class="goals-in-progress-list-item-name">' . $goal['habit_name'] .'</p><p class="goals-in-progress-list-item-status">2 days</p></div><p class="goals-in-progress-list-item-amount">' . $goal['days_amount'] . ' days in ' . $goal['month'] .'</p></li>';
            }
          }
          echo '</ul>';
          if (empty($inProgressGoals['repetitive']) && empty($inProgressGoals['streaks']) && empty($inProgressGoals['total_amount'])) {
            echo '<p class="goals-in-progress-error error">No goals currently in progress.</p>';
          }
        ?>
      </article>
    <?php endif; ?>
    <?php if($goalsCategory === 'completed'): ?>
      <article class="main-progress-goals-completed">
        <h3 class="goals-completed-title hide">Completed goals</h3>
        <?php
          echo '<ul class="goals-completed-list">';
          if (!empty($completedGoals['repetitive'])) {
            foreach ($completedGoals['repetitive'] as $goal) {
              echo '<li class="goals-completed-list-item" style="background-color: ' . $goal['habit_colour'] .'"><div class="goals-completed-list-item-topwrap"><p class="goals-completed-list-item-name">' . $goal['habit_name'] .'</p><p class="goals-completed-list-item-status">completed</p></div><p class="goals-completed-list-item-amount">every ' . $goal['day'] .' of ' . $goal['month'] .'</p></li>';
            }
          }
          if (!empty($completedGoals['streaks'])) {
            foreach ($completedGoals['streaks'] as $goal) {
              echo '<li class="goals-completed-list-item" style="background-color: ' . $goal['habit_colour'] .'"><div class="goals-completed-list-item-topwrap"><p class="goals-completed-list-item-name">' . $goal['habit_name'] .'</p><p class="goals-completed-list-item-status">completed</p></div><p class="goals-completed-list-item-amount">' . $goal['time_amount'] . ' ' . $goal['time_type'] .' in a row</p></li>';
            }
          }
          if (!empty($completedGoals['total_amount'])) {
            foreach ($completedGoals['total_amount'] as $goal) {
              echo '<li class="goals-completed-list-item" style="background-color: ' . $goal['habit_colour'] .'"><div class="goals-completed-list-item-topwrap"><p class="goals-completed-list-item-name">' . $goal['habit_name'] .'</p><p class="goals-completed-list-item-status">completed</p></div><p class="goals-completed-list-item-amount">' . $goal['days_amount'] . ' days in ' . $goal['month'] .'</p></li>';
            }
          }
          echo '</ul>';
          if (empty($completedGoals['repetitive']) && empty($completedGoals['streaks']) && empty($completedGoals['total_amount'])) {
            echo '<p class="goals-completed-error error">No completed goals yet.</p>';
          }
        ?>
      </article>
    <?php endif; ?>
  </section>
<?php endif; ?>
