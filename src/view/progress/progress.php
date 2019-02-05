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
  <section>
  </section>
<?php endif; ?>

<?php if ($currentCategory == 'goals'): ?>
  <section class="main-progress-goals" id="main">
    <h2 class="main-progress-goals-title hide">Goals</h2>
    <a href="index.php?page=profile&category=customize">edit</a>
    <nav class="main-progress-goals-nav">
      <h3 class="goals-nav-title hide">Goals navigation</h3>
      <ul>
        <li>
          <a href="index.php?page=progress&category=goals&goals-type=in-progress" class="<?php if($goalsCategory === 'in-progress') { echo 'nav-item-active';} ?>">in progress</a>
        </li>
        <li>
          <a href="index.php?page=progress&category=goals&goals-type=completed" class="<?php if($goalsCategory === 'completed') { echo 'nav-item-active';} ?>">completed</a>
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
              echo '<li class="goals-in-progress-list-item" style="background-color: ' . $goal['habit_colour'] .'"><span>' . $goal['habit_name'] .'</span><span>every ' . $goal['day'] .' of ' . $goal['month'] .'</span></li>';
            }
          }
          if (!empty($inProgressGoals['streaks'])) {
            foreach ($inProgressGoals['streaks'] as $goal) {
              echo '<li class="goals-in-progress-list-item" style="background-color: ' . $goal['habit_colour'] .'"><span>' . $goal['habit_name'] .'</span><span>' . $goal['time_amount'] . ' ' . $goal['time_type'] .' in a row</span></li>';
            }
          }
          if (!empty($inProgressGoals['total_amount'])) {
            foreach ($inProgressGoals['total_amount'] as $goal) {
              echo '<li class="goals-in-progress-list-item" style="background-color: ' . $goal['habit_colour'] .'"><span>' . $goal['habit_name'] .'</span><span>' . $goal['days_amount'] . ' days in ' . $goal['month'] .'</span></li>';
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
              echo '<li class="goals-completed-list-item" style="background-color: ' . $goal['habit_colour'] .'"><span>' . $goal['habit_icon'] . '</span><span>' . $goal['habit_name'] .'</span><span>Completed</span><span>every ' . $goal['day'] .' of ' . $goal['month'] .'</span></li>';
            }
          }
          if (!empty($completedGoals['streaks'])) {
            foreach ($completedGoals['streaks'] as $goal) {
              echo '<li class="goals-completed-list-item" style="background-color: ' . $goal['habit_colour'] .'"><span>' . $goal['habit_icon'] . '</span><span>' . $goal['habit_name'] .'</span><span>Completed</span><span>' . $goal['time_amount'] . ' ' . $goal['time_type'] .' in a row</span></li>';
            }
          }
          if (!empty($completedGoals['total_amount'])) {
            foreach ($completedGoals['total_amount'] as $goal) {
              echo '<li class="goals-completed-list-item" style="background-color: ' . $goal['habit_colour'] .'"><span>' . $goal['habit_icon'] . '</span><span>' . $goal['habit_name'] .'</span><span>Completed</span><span>' . $goal['days_amount'] . ' days in ' . $goal['month'] .'</span></li>';
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
