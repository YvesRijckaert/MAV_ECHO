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
  <section class="main-progress-statistics" id="main">
    <h2 class="main-progress-statistics-title hide">Statistics</h2>
    <nav class="main-progress-statistics-nav">
      <h3 class="statistics-nav-title hide">Statistics navigation</h3>
      <ul>
        <li>
          <a href="#">Week</a>
        </li>
        <li>
          <a href="#">Month</a>
        </li>
        <li>
          <a href="#">Year</a>
        </li>
      </ul>
    </nav>
    <article>
      <h3>Mood</h3>
      <svg class="graph">
        <title>A line chart showing some information</title>
        <g class="grid x-grid" id="xGrid">
          <line x1="90" x2="90" y1="5" y2="371"></line>
        </g>
        <g class="grid y-grid" id="yGrid">
          <line x1="90" x2="705" y1="370" y2="370"></line>
        </g>
        <g class="labels x-labels">
          <text x="100" y="400">2008</text>
          <text x="246" y="400">2009</text>
          <text x="392" y="400">2010</text>
          <text x="538" y="400">2011</text>
          <text x="684" y="400">2012</text>
          <text x="400" y="440" class="label-title">Year</text>
        </g>
        <g class="labels y-labels">
          <text x="80" y="15">15</text>
          <text x="80" y="131">10</text>
          <text x="80" y="248">5</text>
          <text x="80" y="373">0</text>
          <text x="50" y="200" class="label-title">Price</text>
        </g>
        <g class="data" data-setname="Our first data set">
          <circle cx="90" cy="192" data-value="7.2" r="4"></circle>
          <circle cx="240" cy="141" data-value="8.1" r="4"></circle>
          <circle cx="388" cy="179" data-value="7.7" r="4"></circle>
          <circle cx="531" cy="200" data-value="6.8" r="4"></circle>
          <circle cx="677" cy="104" data-value="6.7" r="4"></circle>
        </g>
      </svg>
    </article>
    <article>
      <h3>Habits</h3>
      <p>Most rewarding habits</p>
      <ol>
        <li>
          <h4>No smoking</h4>
          <p>5x together with a good mood</p>
        </li>
        <li>
          <h4>Eating healthy</h4>
          <p>2x together with a good mood</p>
        </li>
        <li>
          <h4>5k running</h4>
          <p>2x together with a good mood</p>
        </li>
      </ol>
    </article>
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
    <a href="index.php?page=profile&category=customize" class="main-progress-goals-edit">
      <svg width="24px" height="21px" viewBox="0 0 24 21">
        <title>Edit goals button</title>
        <desc>Icon for edit goals button.</desc>
        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g transform="translate(-1284.000000, -14.000000)" stroke="#ffffff" stroke-width="2">
            <path d="M1286.46798,23.1473573 L1290.06213,17.2473573 C1290.53402,16.4727162 1291.37551,16 1292.28257,16 L1299.71743,16 C1300.62449,16 1301.46598,16.4727162 1301.93787,17.2473573 L1305.53202,23.1473573 C1306.0381,23.9781148 1306.0381,25.0218852 1305.53202,25.8526427 L1301.93787,31.7526427 C1301.46598,32.5272838 1300.62449,33 1299.71743,33 L1292.28257,33 C1291.37551,33 1290.53402,32.5272838 1290.06213,31.7526427 L1286.46798,25.8526427 C1285.9619,25.0218852 1285.9619,23.9781148 1286.46798,23.1473573 Z M1296,27.7716515 C1297.90649,27.7716515 1299.45201,26.3068832 1299.45201,24.5 C1299.45201,22.6931168 1297.90649,21.2283485 1296,21.2283485 C1294.09351,21.2283485 1292.54799,22.6931168 1292.54799,24.5 C1292.54799,26.3068832 1294.09351,27.7716515 1296,27.7716515 Z"></path>
          </g>
        </g>
      </svg>
      <span>edit</span>
    </a>
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
              echo '<li class="goals-in-progress-list-item" style="background-color: ' . $goal['habit_colour'] .'">
                      <div class="goals-in-progress-list-item-topwrap">
                        ' . $goal['habit_icon_white'] . '
                        <p class="goals-in-progress-list-item-name">' . $goal['habit_name'] .'</p>
                        <p class="goals-in-progress-list-item-status">2 days</p>
                      </div>
                      <p class="goals-in-progress-list-item-amount">every ' . $goal['day'] .' of ' . $goal['month'] .'</p>
                    </li>';
            }
          }
          if (!empty($inProgressGoals['streaks'])) {
            foreach ($inProgressGoals['streaks'] as $goal) {
              echo '<li class="goals-in-progress-list-item" style="background-color: ' . $goal['habit_colour'] .'">
                      <div class="goals-in-progress-list-item-topwrap">
                        ' . $goal['habit_icon_white'] . '
                        <p class="goals-in-progress-list-item-name">' . $goal['habit_name'] .'</p>
                        <p class="goals-in-progress-list-item-status">2 days</p>
                      </div>
                      <p class="goals-in-progress-list-item-amount">' . $goal['time_amount'] . ' ' . $goal['time_type'] .' in a row</p>
                    </li>';
            }
          }
          if (!empty($inProgressGoals['total_amount'])) {
            foreach ($inProgressGoals['total_amount'] as $goal) {
              echo '<li class="goals-in-progress-list-item" style="background-color: ' . $goal['habit_colour'] .'">
                      <div class="goals-in-progress-list-item-topwrap">
                        ' . $goal['habit_icon_white'] . '
                        <p class="goals-in-progress-list-item-name">' . $goal['habit_name'] .'</p>
                        <p class="goals-in-progress-list-item-status">2 days</p>
                      </div>
                      <p class="goals-in-progress-list-item-amount">' . $goal['days_amount'] . ' days in ' . $goal['month'] .'</p>
                    </li>';
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
              echo '<li class="goals-completed-list-item" style="background-color: ' . $goal['habit_colour'] .'">
                      <div class="goals-completed-list-item-topwrap">
                        ' . $goal['habit_icon_white'] . '
                        <p class="goals-completed-list-item-name">' . $goal['habit_name'] .'</p>
                        <p class="goals-completed-list-item-status">completed</p>
                      </div>
                      <p class="goals-completed-list-item-amount">every ' . $goal['day'] .' of ' . $goal['month'] .'</p>
                    </li>';
            }
          }
          if (!empty($completedGoals['streaks'])) {
            foreach ($completedGoals['streaks'] as $goal) {
              echo '<li class="goals-completed-list-item" style="background-color: ' . $goal['habit_colour'] .'">
                      <div class="goals-completed-list-item-topwrap">
                        ' . $goal['habit_icon_white'] . '
                        <p class="goals-completed-list-item-name">' . $goal['habit_name'] .'</p>
                        <p class="goals-completed-list-item-status">completed</p>
                      </div>
                      <p class="goals-completed-list-item-amount">' . $goal['time_amount'] . ' ' . $goal['time_type'] .' in a row</p>
                    </li>';
            }
          }
          if (!empty($completedGoals['total_amount'])) {
            foreach ($completedGoals['total_amount'] as $goal) {
              echo '<li class="goals-completed-list-item" style="background-color: ' . $goal['habit_colour'] .'">
                      <div class="goals-completed-list-item-topwrap">
                        ' . $goal['habit_icon_white'] . '
                        <p class="goals-completed-list-item-name">' . $goal['habit_name'] .'</p>
                        <p class="goals-completed-list-item-status">completed</p>
                      </div>
                      <p class="goals-completed-list-item-amount">' . $goal['days_amount'] . ' days in ' . $goal['month'] .'</p>
                    </li>';
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
