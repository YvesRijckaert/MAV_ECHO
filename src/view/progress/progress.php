<nav class="main-nav">
  <h2 class="main-nav-title hide">Progress navigation</h2>
  <ul class="main-nav-ul <?php echo 'active-category-' . $currentCategory; ?>">
    <li class="main-nav-item main-nav-item-stats <?php if($currentCategory === 'statistics') { echo 'main-nav-item-active';} ?>">
      <a href="index.php?page=progress&category=statistics&date=week" class="main-nav-item-link">stats</a>
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
      <ul class="statistics-nav-list">
        <li class="statistics-nav-list-item">
          <a href="index.php?page=progress&category=statistics&date=week" class="statistics-nav-list-item-link <?php if($statisticsCategory === 'week') { echo 'statistics-nav-list-item-link-active';} ?>">week</a>
        </li>
        <li class="statistics-nav-list-item">
          <a href="index.php?page=progress&category=statistics&date=month" class="statistics-nav-list-item-link <?php if($statisticsCategory === 'month') { echo 'statistics-nav-list-item-link-active';} ?>">month</a>
        </li>
        <li class="statistics-nav-list-item">
          <a href="index.php?page=progress&category=statistics&date=year" class="statistics-nav-list-item-link <?php if($statisticsCategory === 'year') { echo 'statistics-nav-list-item-link-active';} ?>">year</a>
        </li>
      </ul>
    </nav>
    <article class="main-progress-statistics-mood">
      <h3 class="statistics-mood-title">mood</h3>
      <svg class="graph">
        <title>Mood graph</title>
        <desc>A graph showing the average mood</desc>
        <g class="grid y-grid">
          <line x1="90" x2="505" y1="270" y2="270"></line>
          <line x1="90" x2="505" y1="170" y2="170"></line>
          <line x1="90" x2="505" y1="70" y2="70"></line>
        </g>
        <g class="labels x-labels">
          <text x="90" y="300">mon</text>
          <text x="160" y="300">tue</text>
          <text x="230" y="300">wed</text>
          <text x="300" y="300">thu</text>
          <text x="370" y="300">fri</text>
          <text x="440" y="300">sat</text>
          <text x="510" y="300">sun</text>
        </g>
        <g class="labels y-labels">
          <text x="90" y="50">great</text>
          <text x="90" y="250">bad</text>
        </g>
        <g class="data">
          <circle cx="90" cy="192" r="4"></circle>
          <circle cx="160" cy="141" r="4"></circle>
          <circle cx="230" cy="179" r="4"></circle>
          <circle cx="300" cy="200" r="4"></circle>
          <circle cx="370" cy="104" r="4"></circle>
        </g>
      </svg>
    </article>
    <article class="main-progress-statistics-habits">
      <h3 class="statistics-habits-title">habits</h3>
      <p>Most rewarding habits</p>
      <ol class="main-progress-statistics-habits-list">
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
    <?php foreach ($allPossibleAchievements as $achievement): ?>
      <?php if(!empty($allFulfilledAchievements)): ?>
        <?php foreach(array_column($allFulfilledAchievements, 'achievement_id') as $fulfilledAchievement): ?>
          <?php if($achievement['data_achievement_id'] == $fulfilledAchievement): ?>
            <li class="achievements-list-item achievement-list-item-unlocked">
              <?php echo $achievement['data_achievement_image'] ?>
              <h3 class="achievements-list-item-title"><?php echo $achievement['data_achievement_name'] ?></h3>
              <p class="achievements-list-item-desc"><?php echo $achievement['data_achievement_desc'] ?></p>
            </li>
          <?php else: ?>
            <li class="achievements-list-item">
              <svg class="achievements-list-item-svg" width="140px" height="50px" viewBox="0 0 140 50">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <circle id="Oval" fill="#ffffff" cx="70" cy="25" r="25"></circle>
                  <rect id="Rectangle" fill="#ffffff" x="0" y="22" width="140" height="5"></rect>
                  <circle id="Oval" fill="#f5f5f5" cx="70" cy="20" r="6"></circle>
                  <rect id="Rectangle" fill="#f5f5f5" x="67.5" y="23" width="5" height="12" rx="2"></rect>
                </g>
              </svg>
              <h3 class="achievements-list-item-title"><?php echo $achievement['data_achievement_name'] ?></h3>
              <p class="achievements-list-item-desc"><?php echo $achievement['data_achievement_desc'] ?></p>
            </li>
          <?php endif; ?>
        <?php endforeach; ?>
      <?php else: ?>
        <li class="achievements-list-item">
          <svg class="achievements-list-item-svg" width="140px" height="50px" viewBox="0 0 140 50">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <circle id="Oval" fill="#ffffff" cx="70" cy="25" r="25"></circle>
              <rect id="Rectangle" fill="#ffffff" x="0" y="22" width="140" height="5"></rect>
              <circle id="Oval" fill="#f5f5f5" cx="70" cy="20" r="6"></circle>
              <rect id="Rectangle" fill="#f5f5f5" x="67.5" y="23" width="5" height="12" rx="2"></rect>
            </g>
          </svg>
          <h3 class="achievements-list-item-title"><?php echo $achievement['data_achievement_name'] ?></h3>
          <p class="achievements-list-item-desc"><?php echo $achievement['data_achievement_desc'] ?></p>
        </li>
      <?php endif; ?>
    <?php endforeach; ?>
    </ul>
  </section>
<?php endif; ?>

<?php if ($currentCategory == 'goals'): ?>
  <section class="main-progress-goals" id="main">
    <h2 class="main-progress-goals-title hide">Goals</h2>
    <a href="index.php?page=profile&category=customize" class="main-progress-goals-edit">
      <span>edit</span>
      <svg width="24px" height="21px" viewBox="0 0 24 21">
        <title>Edit goals button</title>
        <desc>Icon for edit goals button.</desc>
        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g transform="translate(-1284.000000, -14.000000)" stroke="#ffffff" stroke-width="2">
            <path d="M1286.46798,23.1473573 L1290.06213,17.2473573 C1290.53402,16.4727162 1291.37551,16 1292.28257,16 L1299.71743,16 C1300.62449,16 1301.46598,16.4727162 1301.93787,17.2473573 L1305.53202,23.1473573 C1306.0381,23.9781148 1306.0381,25.0218852 1305.53202,25.8526427 L1301.93787,31.7526427 C1301.46598,32.5272838 1300.62449,33 1299.71743,33 L1292.28257,33 C1291.37551,33 1290.53402,32.5272838 1290.06213,31.7526427 L1286.46798,25.8526427 C1285.9619,25.0218852 1285.9619,23.9781148 1286.46798,23.1473573 Z M1296,27.7716515 C1297.90649,27.7716515 1299.45201,26.3068832 1299.45201,24.5 C1299.45201,22.6931168 1297.90649,21.2283485 1296,21.2283485 C1294.09351,21.2283485 1292.54799,22.6931168 1292.54799,24.5 C1292.54799,26.3068832 1294.09351,27.7716515 1296,27.7716515 Z"></path>
          </g>
        </g>
      </svg>
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
          <ul class="goals-in-progress-list">
          <?php if (!empty($inProgressGoals['repetitive'])) {
            foreach ($inProgressGoals['repetitive'] as $goal) { ?>
              <li class="goals-in-progress-list-item" style="background-color: <?php echo $goal['habit_colour'] ?>;">
                <div class="goals-in-progress-list-item-topwrap">
                  <svg width="30px" height="30px" viewbox="0 0 180 180">
                    <g fill="#ffffff" stroke="none" stroke-width="1" fill-rule="evenodd">
                      <?php echo $goal['habit_icon'] ?>
                    </g>
                  </svg>
                  <p class="goals-in-progress-list-item-name"><?php echo $goal['habit_name'] ?></p>
                  <p class="goals-in-progress-list-item-status"><?php echo $goal['time_amount_progress'] ?> <?php if($goal['time_amount_progress'] == 1) { echo 'day'; } else { echo 'days'; }; ?></p>
                </div>
                <svg style="width:100%; height:100%" width="250px" height="3px" viewBox="0 0 250 3">
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <rect fill="#2b2b2b" opacity="0.2" transform="translate(125, 1.5) scale(1, -1) translate(-125, -1.5) " x="0" y="0" width="250" height="3" rx="1.5"></rect>
                    <rect class="goals-progress-bar" style="width: <?php echo ($goal['time_amount_progress'] / 4) * 100 . '%' ?>" fill="#ffffff" x="0" y="0" height="3" rx="1.5"></rect>
                  </g>
                </svg>
                <p class="goals-in-progress-list-item-amount">every <?php echo $goal['day'] ?> of <?php echo $goal['month'] ?></p>
              </li>
            <?php }
          }
          if (!empty($inProgressGoals['streaks'])) {
            foreach ($inProgressGoals['streaks'] as $goal) { ?>
              <li class="goals-in-progress-list-item" style="background-color: <?php echo $goal['habit_colour'] ?>;">
                <div class="goals-in-progress-list-item-topwrap">
                  <svg width="30px" height="30px" viewbox="0 0 180 180">
                    <g fill="#ffffff" stroke="none" stroke-width="1" fill-rule="evenodd">
                      <?php echo $goal['habit_icon'] ?>
                    </g>
                  </svg>
                  <p class="goals-in-progress-list-item-name"><?php echo $goal['habit_name'] ?></p>
                  <p class="goals-in-progress-list-item-status"><?php echo $goal['time_amount_progress'] ?> <?php if($goal['time_amount_progress'] == 1) { echo 'day'; } else { echo 'days'; }; ?></p>
                </div>
                <svg style="width:100%; height:100%" width="250px" height="3px" viewBox="0 0 250 3">
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <rect fill="#2b2b2b" opacity="0.2" transform="translate(125, 1.5) scale(1, -1) translate(-125, -1.5) " x="0" y="0" width="250" height="3" rx="1.5"></rect>
                    <rect class="goals-progress-bar" style="width: <?php echo ($goal['time_amount_progress'] / $goal['time_amount']) * 100 . '%' ?>" fill="#ffffff" x="0" y="0" height="3" rx="1.5"></rect>
                  </g>
                </svg>
                <p class="goals-in-progress-list-item-amount"><?php echo $goal['time_amount'] ?> <?php echo $goal['time_type'] ?> in a row</p>
              </li>
            <?php }
          }
          if (!empty($inProgressGoals['total_amount'])) {
            foreach ($inProgressGoals['total_amount'] as $goal) { ?>
              <li class="goals-in-progress-list-item" style="background-color: <?php echo $goal['habit_colour'] ?>;">
                <div class="goals-in-progress-list-item-topwrap">
                  <svg width="30px" height="30px" viewbox="0 0 180 180">
                    <g fill="#ffffff" stroke="none" stroke-width="1" fill-rule="evenodd">
                      <?php echo $goal['habit_icon'] ?>
                    </g>
                  </svg>
                  <p class="goals-in-progress-list-item-name"><?php echo $goal['habit_name'] ?></p>
                  <p class="goals-in-progress-list-item-status"><?php echo $goal['time_amount_progress'] ?> <?php if($goal['time_amount_progress'] == 1) { echo 'day'; } else { echo 'days'; }; ?></p>
                </div>
                <svg style="width:100%; height:100%" width="250px" height="3px" viewBox="0 0 250 3">
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <rect fill="#2b2b2b" opacity="0.2" transform="translate(125, 1.5) scale(1, -1) translate(-125, -1.5) " x="0" y="0" width="250" height="3" rx="1.5"></rect>
                    <rect class="goals-progress-bar" style="width: <?php echo ($goal['time_amount_progress'] / $goal['days_amount']) * 100 . '%' ?>" fill="#ffffff" x="0" y="0" height="3" rx="1.5"></rect>
                  </g>
                </svg>
                <p class="goals-in-progress-list-item-amount"><?php echo $goal['days_amount'] ?> days in <?php echo $goal['month'] ?></p>
              </li>
            <?php }
          } ?>
          </ul>
          <?php if (empty($inProgressGoals['repetitive']) && empty($inProgressGoals['streaks']) && empty($inProgressGoals['total_amount'])) { ?>
            <p class="goals-in-progress-error error">No goals currently in progress.</p>
          <?php } ?>
      </article>
    <?php endif; ?>
    <?php if($goalsCategory === 'completed'): ?>
      <article class="main-progress-goals-completed">
        <h3 class="goals-completed-title hide">Completed goals</h3>
          <ul class="goals-completed-list">
          <?php if (!empty($completedGoals['repetitive'])) {
            foreach ($completedGoals['repetitive'] as $goal) { ?>
              <li class="goals-completed-list-item" style="background-color: <?php echo $goal['habit_colour'] ?>;">
                <div class="goals-completed-list-item-topwrap">
                  <svg width="30px" height="30px" viewbox="0 0 180 180">
                    <g fill="#ffffff" stroke="none" stroke-width="1" fill-rule="evenodd">
                      <?php echo $goal['habit_icon'] ?>
                    </g>
                  </svg>
                  <p class="goals-completed-list-item-name"><?php echo $goal['habit_name'] ?></p>
                  <p class="goals-completed-list-item-status">completed</p>
                </div>
                <svg style="width:100%; height:100%" width="250px" height="3px" viewBox="0 0 250 3">
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <rect fill="#2b2b2b" opacity="0.2" transform="translate(125, 1.5) scale(1, -1) translate(-125, -1.5) " x="0" y="0" width="250" height="3" rx="1.5"></rect>
                    <rect class="goals-progress-bar" style="width: 100%" fill="#ffffff" x="0" y="0" height="3" rx="1.5"></rect>
                  </g>
                </svg>
                <p class="goals-completed-list-item-amount">every <?php echo $goal['day'] ?> of <?php echo $goal['month'] ?></p>
              </li>
            <?php }
          }
          if (!empty($completedGoals['streaks'])) {
            foreach ($completedGoals['streaks'] as $goal) { ?>
              <li class="goals-completed-list-item" style="background-color: <?php echo $goal['habit_colour'] ?>">
                <div class="goals-completed-list-item-topwrap">
                  <svg width="30px" height="30px" viewbox="0 0 180 180">
                    <g fill="#ffffff" stroke="none" stroke-width="1" fill-rule="evenodd">
                      <?php echo $goal['habit_icon'] ?>
                    </g>
                  </svg>
                  <p class="goals-completed-list-item-name"><?php echo $goal['habit_name'] ?></p>
                  <p class="goals-completed-list-item-status">completed</p>
                </div>
                <svg style="width:100%; height:100%" width="250px" height="3px" viewBox="0 0 250 3">
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <rect fill="#2b2b2b" opacity="0.2" transform="translate(125, 1.5) scale(1, -1) translate(-125, -1.5) " x="0" y="0" width="250" height="3" rx="1.5"></rect>
                    <rect class="goals-progress-bar" style="width: 100%" fill="#ffffff" x="0" y="0" height="3" rx="1.5"></rect>
                  </g>
                </svg>
                <p class="goals-completed-list-item-amount"><?php echo $goal['time_amount'] ?> <?php echo $goal['time_type'] ?> in a row</p>
              </li>
            <?php }
          }
          if (!empty($completedGoals['total_amount'])) {
            foreach ($completedGoals['total_amount'] as $goal) { ?>
              <li class="goals-completed-list-item" style="background-color: <?php echo $goal['habit_colour'] ?>">
                <div class="goals-completed-list-item-topwrap">
                  <svg width="30px" height="30px" viewbox="0 0 180 180">
                    <g fill="#ffffff" stroke="none" stroke-width="1" fill-rule="evenodd">
                      <?php echo $goal['habit_icon'] ?>
                    </g>
                  </svg>
                  <p class="goals-completed-list-item-name"><?php echo $goal['habit_name'] ?></p>
                  <p class="goals-completed-list-item-status">completed</p>
                </div>
                <svg style="width:100%; height:100%" width="250px" height="3px" viewBox="0 0 250 3">
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <rect fill="#2b2b2b" opacity="0.2" transform="translate(125, 1.5) scale(1, -1) translate(-125, -1.5) " x="0" y="0" width="250" height="3" rx="1.5"></rect>
                    <rect class="goals-progress-bar" style="width: 100%" fill="#ffffff" x="0" y="0" height="3" rx="1.5"></rect>
                  </g>
                </svg>
                <p class="goals-completed-list-item-amount"><?php echo $goal['days_amount'] ?> days in <?php echo $goal['month'] ?></p>
              </li>
            <?php }
          } ?>
          </ul>
          <?php if (empty($completedGoals['repetitive']) && empty($completedGoals['streaks']) && empty($completedGoals['total_amount'])) { ?>
            <p class="goals-completed-error error">No completed goals yet.</p>
          <?php } ?>
      </article>
    <?php endif; ?>
  </section>
<?php endif; ?>
