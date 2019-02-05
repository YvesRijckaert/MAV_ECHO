<nav class="main-nav">
  <h2 class="main-nav-title hide">Profile navigation</h2>
  <ul class="main-nav-ul <?php echo 'active-category-' . $currentCategory; ?>">
    <li class="main-nav-item main-nav-item-info <?php if($currentCategory === 'info') { echo 'main-nav-item-active';} ?>">
      <a href="index.php?page=profile&category=info" class="main-nav-item-link">info</a>
    </li>
    <li class="main-nav-item main-nav-item-customize <?php if($currentCategory === 'customize') { echo 'main-nav-item-active';} ?>">
      <a href="index.php?page=profile&category=customize" class="main-nav-item-link">customize</a>
    </li>
    <li class="main-nav-item main-nav-item-links <?php if($currentCategory === 'links') { echo 'main-nav-item-active';} ?>">
      <a href="index.php?page=profile&category=links" class="main-nav-item-link">links</a>
    </li>
  </ul>
</nav>

<?php if ($currentCategory == 'info') : ?>
  <section class="main-profile-info" id="main">
    <h2 class="main-profile-info-title hide">Profile settings</h2>
    <form class="main-profile-info-form" method="post">
      <label class="info-form-group info-form-email">
        <span class="info-form-label-text">email address</span>
        <input type="email" name="email" class="info-form-input" value="<?php echo $_SESSION['user']['email'];?>" required />
        <?php if(!empty($errors['email'])) echo '<span class="error">' . $errors['email'] . '</span>';?>
      </label>
      <label class="info-form-group info-form-username">
        <span class="info-form-label-text">username</span>
        <input type="text" name="nickname" class="info-form-input" value="<?php echo $_SESSION['user']['nickname'];?>" required />
        <?php if(!empty($errors['nickname'])) echo '<span class="error">' . $errors['nickname'] . '</span>';?>
      </label>
      <label class="info-form-group info-form-birthday">
        <span class="info-form-label-text">birthday</span>
        <input type="date" name="birthdate" class="info-form-input" value="<?php echo $_SESSION['user']['birthdate'];?>" required />
        <?php if(!empty($errors['birthdate'])) echo '<span class="error">' . $errors['birthdate'] . '</span>';?>
      </label>
      <div class="info-form-group info-form-password">
        <p class="info-form-label-text">password</p>
        <a href="#">change password</a>
      </div>
      <div class="info-form-group info-form-goals">
        <p class="info-form-label-text">overall goal</p>
        <?php if(!empty($errors['lifegoal'])) echo '<span class="error">' . $errors['lifegoal'] . '</span>';?>
        <div class="info-form-goals-options">
          <input type="radio" name="lifegoal" id="reduce-stress" value="reduce-stress" required <?php if($_SESSION['user']['lifegoal'] == 'reduce-stress') echo 'checked' ?>/>
          <label for="reduce-stress" class="info-form-goals-option">
            <span>reduce stress</span>
          </label>
          <input type="radio" name="lifegoal" id="feel-happier" value="feel-happier" required <?php if($_SESSION['user']['lifegoal'] == 'feel-happier') echo 'checked' ?> />
          <label for="feel-happier" class="info-form-goals-option">
            <span>feel happier</span>
          </label>
          <input type="radio" name="lifegoal" id="decrease-anxiety" value="decrease-anxiety" required <?php if($_SESSION['user']['lifegoal'] == 'decrease-anxiety') echo 'checked' ?> />
          <label for="decrease-anxiety" class="info-form-goals-option">
            <span>decrease anxiety</span>
          </label>
          <input type="radio" name="lifegoal" id="build-confidence" value="build-confidence" required <?php if($_SESSION['user']['lifegoal'] == 'build-confidence') echo 'checked' ?> />
          <label for="build-confidence" class="info-form-goals-option">
            <span>build confidence</span>
          </label>
          <input type="radio" name="lifegoal" id="improve-social-skills" value="improve-social-skills" required <?php if($_SESSION['user']['lifegoal'] == 'improve-social-skills') echo 'checked' ?> />
          <label for="improve-social-skills" class="info-form-goals-option">
            <span>improve social skills</span>
          </label>
          <input type="radio" name="lifegoal" id="live-healthier" value="live-healthier" required <?php if($_SESSION['user']['lifegoal'] == 'live-healthier') echo 'checked' ?> />
          <label for="live-healthier" class="info-form-goals-option">
            <span>live healthier</span>
          </label>
          <input type="radio" name="lifegoal" id="think-positively" value="think-positively" required <?php if($_SESSION['user']['lifegoal'] == 'think-positively') echo 'checked' ?> />
          <label for="think-positively" class="info-form-goals-option">
            <span>think positively</span>
          </label>
        </div>
      </div>
      <input type="submit" class="info-form-submit" name="update-profile" class="info-form-submit"  value="done" />
    </form>
  </section>
<?php endif; ?>

<?php if ($currentCategory == 'customize'): ?>

  <?php if ($currentStep === 1): ?>
    <section class="main-profile-customize" id="main">
      <h2 class="main-profile-customize-title hide">Customize</h2>
      <article class="main-profile-customize-habits">
        <h3 class="customize-habits-title">Habits</h3>
        <ul class="customize-habits-list">
          <?php foreach ($currentHabits as $habit): {
            if ($habit['active']) {
                echo '<li class="customize-habits-list-item" style="background-color:' . $habit['habit_colour'] .'; border: .2rem solid ' . $habit['habit_colour'] . '"><span>' . $habit['habit_name'] . '</span>' . '<a href="index.php?page=profile&category=customize&delete-habit=' . $habit['habit_id']  .'"><svg width="11px" height="11px" viewBox="0 0 11 11">
                  <title>Delete habit link</title>
                  <desc>Icon for delete habit link.</desc>
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(-627.000000, -332.000000)" stroke="#FFFFFF" stroke-linecap="round" stroke-width="2.17756">
                      <g transform="translate(294.000000, 203.000000)">
                        <g transform="translate(0.000000, 103.000000)">
                          <g transform="translate(338.554870, 31.192388) rotate(-45.000000) translate(-338.554870, -31.192388) translate(332.554870, 25.192388)">
                            <path d="M5.74368671,0.15790027 L5.74368671,11.1579003"></path>
                            <path d="M5.74368671,0.203354815 L5.74368671,11.1124457" transform="translate(5.743687, 5.657900) rotate(90.000000) translate(-5.743687, -5.657900) "></path>
                          </g>
                        </g>
                      </g>
                    </g>
                  </g>
            </svg></a>' . '</li>';
            } else {
              echo '<li class="customize-habits-list-item" style="border: .2rem solid ' . $habit['habit_colour'] . '; color: ' . $habit['habit_colour'] . '"><a href="index.php?page=profile&category=customize&add-habit=' . $habit['habit_colour_name']  .'">add habit</a></li>';
            }
          };
          endforeach;
          ?>
        </ul>
      </article>
      <article class="main-profile-customize-goals">
        <h3 class="customize-goals-title">Goals</h3>
        <?php
          if(!empty($currentGoals)) {
            echo '<ul class="customize-goals-list">';
            foreach ($currentGoals as $goal ): {
              if(!isset($goal['repetitive']['no-goal'])) {
                echo '<li class="customize-goals-list-item" style="background-color: ' . $goal['repetitive']['habit_colour'] . '; border: .2rem solid ' . $goal['total_amount']['habit_colour'] . '"><span>' . $goal['repetitive']['habit_name'] . ', every ' . $goal['repetitive']['day'] . ' of ' . $goal['repetitive']['month'] . '</span>' . '<a href="index.php?page=profile&category=customize&goal-category=repetitive&delete-goal=' . $goal['repetitive']['repetitive_id']  .'"><svg width="11px" height="11px" viewBox="0 0 11 11">
                <title>Delete habit link</title>
                <desc>Icon for delete habit link.</desc>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-627.000000, -332.000000)" stroke="#FFFFFF" stroke-linecap="round" stroke-width="2.17756">
                    <g transform="translate(294.000000, 203.000000)">
                      <g transform="translate(0.000000, 103.000000)">
                        <g transform="translate(338.554870, 31.192388) rotate(-45.000000) translate(-338.554870, -31.192388) translate(332.554870, 25.192388)">
                          <path d="M5.74368671,0.15790027 L5.74368671,11.1579003"></path>
                          <path d="M5.74368671,0.203354815 L5.74368671,11.1124457" transform="translate(5.743687, 5.657900) rotate(90.000000) translate(-5.743687, -5.657900) "></path>
                        </g>
                      </g>
                    </g>
                  </g>
                </g>
          </svg></a>' . '</li>';
              } else if(!isset($goal['streaks']['no-goal'])) {
                echo '<li class="customize-goals-list-item" style="background-color: ' . $goal['streaks']['habit_colour'] . '; border: .2rem solid ' . $goal['total_amount']['habit_colour'] . '"><span>' . $goal['streaks']['habit_name'] . ', ' . $goal['streaks']['time_amount'] . ' ' . $goal['streaks']['time_type'] . ' in a row' . '</span>' . '<a href="index.php?page=profile&category=customize&goal-category=streaks&delete-goal=' . $goal['streaks']['streak_id']  .'"><svg width="11px" height="11px" viewBox="0 0 11 11">
                <title>Delete habit link</title>
                <desc>Icon for delete habit link.</desc>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-627.000000, -332.000000)" stroke="#FFFFFF" stroke-linecap="round" stroke-width="2.17756">
                    <g transform="translate(294.000000, 203.000000)">
                      <g transform="translate(0.000000, 103.000000)">
                        <g transform="translate(338.554870, 31.192388) rotate(-45.000000) translate(-338.554870, -31.192388) translate(332.554870, 25.192388)">
                          <path d="M5.74368671,0.15790027 L5.74368671,11.1579003"></path>
                          <path d="M5.74368671,0.203354815 L5.74368671,11.1124457" transform="translate(5.743687, 5.657900) rotate(90.000000) translate(-5.743687, -5.657900) "></path>
                        </g>
                      </g>
                    </g>
                  </g>
                </g>
          </svg></a>' . '</li>';
              } else if(!isset($goal['total_amount']['no-goal'])) {
                echo '<li class="customize-goals-list-item" style="background-color: ' . $goal['total_amount']['habit_colour'] . '; border: .2rem solid ' . $goal['total_amount']['habit_colour'] . '"><span>' . $goal['total_amount']['habit_name'] . ', ' . $goal['total_amount']['days_amount'] . ' days in ' . $goal['total_amount']['month'] . '</span>' . '<a href="index.php?page=profile&category=customize&goal-category=total-amount&delete-goal=' . $goal['total_amount']['total_amount_id']  .'"><svg width="11px" height="11px" viewBox="0 0 11 11">
                <title>Delete habit link</title>
                <desc>Icon for delete habit link.</desc>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-627.000000, -332.000000)" stroke="#FFFFFF" stroke-linecap="round" stroke-width="2.17756">
                    <g transform="translate(294.000000, 203.000000)">
                      <g transform="translate(0.000000, 103.000000)">
                        <g transform="translate(338.554870, 31.192388) rotate(-45.000000) translate(-338.554870, -31.192388) translate(332.554870, 25.192388)">
                          <path d="M5.74368671,0.15790027 L5.74368671,11.1579003"></path>
                          <path d="M5.74368671,0.203354815 L5.74368671,11.1124457" transform="translate(5.743687, 5.657900) rotate(90.000000) translate(-5.743687, -5.657900) "></path>
                        </g>
                      </g>
                    </g>
                  </g>
                </g>
          </svg></a>' . '</li>';
              }
              if(isset($goal['repetitive']['no-goal']) && isset($goal['streaks']['no-goal']) && isset($goal['total_amount']['no-goal'])) {
                echo '<li class="customize-goals-list-item" style="border: .2rem solid ' . $goal['repetitive']['habit_colour'] . '; color: ' . $goal['repetitive']['habit_colour'] . '"><a href="index.php?page=profile&category=customize&add-goal=' . $goal['repetitive']['habit_name']  .'">add goal for ' . $goal['repetitive']['habit_name'] . '</a></li>';
              }
            };
            endforeach;
            echo '</ul>';
          } else {
            echo '<p>You need to add habits in order to add goals.</p>';
          }
        ?>
      </article>
    </section>
  <?php endif; ?>

  <?php if ($currentStep === 'add-habit-1'): ?>
    <section class="main-profile-add-habit">
      <h2 class="main-profile-add-habit-title">add habit</h2>
      <p>choose or write down a new habit</p>
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
    </section>
  <?php endif; ?>

  <?php if ($currentStep === 'add-habit-2'): ?>
    <section class="main-profile-add-habit">
      <h2 class="main-profile-add-habit-title">add habit</h2>
      <p>choose a shape</p>
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
    </section>
  <?php endif; ?>

  <?php if ($currentStep === 'add-goal-1'): ?>
    <section class="main-profile-add-goal">
      <h2 class="main-profile-add-goal-title">add goal</h2>
      <p>choose a goal type</p>
      <ul>
        <li>
          <a href="index.php?page=profile&category=customize&add-goal=<?php echo $habit ?>&goal-type=repetitive">Repetitive</a>
          <p>e.g. <?php echo $habit ?>, every <strong>thursday</strong> of <strong>june</strong>.</p>
        </li>
        <li>
          <a href="index.php?page=profile&category=customize&add-goal=<?php echo $habit ?>&goal-type=streak">Streak</a>
          <p>e.g. <?php echo $habit ?>, <strong>10 days</strong> in a row.</p>
        </li>
        <li>
          <a href="index.php?page=profile&category=customize&add-goal=<?php echo $habit ?>&goal-type=total">Total</a>
          <p>e.g. <?php echo $habit ?>, <strong>20 days</strong> in <strong>january</strong>.</p>
        </li>
      </ul>
    </section>
  <?php endif; ?>

  <?php if ($currentStep === 'add-goal-repetitive'): ?>
    <section class="main-profile-add-goal">
      <h2 class="main-profile-add-goal-title">add goal</h2>
      <p>edit the goal</p>
      <p><?php echo $habit ?>, every thursday of june.</p>
      <form method="post">
        <fieldset>
          <legend>Choose your day.</legend>
          <?php if(!empty($errors['chosen_repetitive_goal_day'])) echo '<span class="error">' . $errors['chosen_repetitive_goal_day'] . '</span>';?>
          <input type="radio" id="monday" name="chosen_repetitive_goal_day" value="monday" required checked />
          <label for="monday">
            <span class="form-label">monday</span>
          </label>
          <input type="radio" id="tuesday" name="chosen_repetitive_goal_day" value="tuesday" required />
          <label for="tuesday">
            <span class="form-label">tuesday</span>
          </label>
          <input type="radio" id="wednesday" name="chosen_repetitive_goal_day" value="wednesday" required />
          <label for="wednesday">
            <span class="form-label">wednesday</span>
          </label>
          <input type="radio" id="thursday" name="chosen_repetitive_goal_day" value="thursday" required />
          <label for="thursday">
            <span class="form-label">thursday</span>
          </label>
          <input type="radio" id="friday" name="chosen_repetitive_goal_day" value="friday" required />
          <label for="friday">
            <span class="form-label">friday</span>
          </label>
          <input type="radio" id="saturday" name="chosen_repetitive_goal_day" value="saturday" required />
          <label for="saturday">
            <span class="form-label">saturday</span>
          </label>
          <input type="radio" id="sunday" name="chosen_repetitive_goal_day" value="sunday" required />
          <label for="sunday">
            <span class="form-label">sunday</span>
          </label>
        </fieldset>
        <fieldset>
          <legend>Choose your month.</legend>
          <?php if(!empty($errors['chosen_repetitive_goal_month'])) echo '<span class="error">' . $errors['chosen_repetitive_goal_month'] . '</span>';?>
          <input type="radio" id="january" name="chosen_repetitive_goal_month" value="january" required checked />
          <label for="january">
            <span class="form-label">january</span>
          </label>
          <input type="radio" id="february" name="chosen_repetitive_goal_month" value="february" required />
          <label for="february">
            <span class="form-label">february</span>
          </label>
          <input type="radio" id="march" name="chosen_repetitive_goal_month" value="march" required />
          <label for="march">
            <span class="form-label">march</span>
          </label>
          <input type="radio" id="april" name="chosen_repetitive_goal_month" value="april" required />
          <label for="april">
            <span class="form-label">april</span>
          </label>
          <input type="radio" id="may" name="chosen_repetitive_goal_month" value="may" required />
          <label for="may">
            <span class="form-label">may</span>
          </label>
          <input type="radio" id="june" name="chosen_repetitive_goal_month" value="june" required />
          <label for="june">
            <span class="form-label">june</span>
          </label>
          <input type="radio" id="july" name="chosen_repetitive_goal_month" value="july" required />
          <label for="july">
            <span class="form-label">july</span>
          </label>
          <input type="radio" id="august" name="chosen_repetitive_goal_month" value="august" required />
          <label for="august">
            <span class="form-label">august</span>
          </label>
          <input type="radio" id="september" name="chosen_repetitive_goal_month" value="september" required />
          <label for="september">
            <span class="form-label">september</span>
          </label>
          <input type="radio" id="october" name="chosen_repetitive_goal_month" value="october" required />
          <label for="october">
            <span class="form-label">october</span>
          </label>
          <input type="radio" id="november" name="chosen_repetitive_goal_month" value="november" required />
          <label for="november">
            <span class="form-label">november</span>
          </label>
          <input type="radio" id="december" name="chosen_repetitive_goal_month" value="december" required />
          <label for="december">
            <span class="form-label">december</span>
          </label>
        </fieldset>
        <input type="submit" name="add_repetitive_goal" value="submit">
      </form>
    </section>
  <?php endif; ?>

  <?php if ($currentStep === 'add-goal-streak'): ?>
    <section class="main-profile-add-goal">
      <h2 class="main-profile-add-goal-title">add goal</h2>
      <p>edit the goal</p>
      <p><?php echo $habit ?>, 10 days in a row.</p>
      <form method="post">
        <fieldset>
          <legend>Choose amount of days</legend>
          <?php if(!empty($errors['chosen_streak_goal_number'])) echo '<span class="error">' . $errors['chosen_streak_goal_number'] . '</span>';?>
          <input type="number" name="chosen_streak_goal_number" value="2" min="2" max="30" required />
        </fieldset>
        <input type="submit" name="add_streak_goal" value="submit">
      </form>
    </section>
  <?php endif; ?>

  <?php if ($currentStep === 'add-goal-total'): ?>
    <section class="main-profile-add-goal">
      <h2 class="main-profile-add-goal-title">add goal</h2>
      <p>edit the goal</p>
      <p><?php echo $habit ?>, 10 days in january.</p>
      <form method="post">
        <fieldset>
          <legend>Choose amount of days</legend>
          <?php if(!empty($errors['chosen_total_goal_number'])) echo '<span class="error">' . $errors['chosen_total_goal_number'] . '</span>';?>
          <input type="number" name="chosen_total_goal_number" value="2" min="2" max="30" required />
        </fieldset>
        <fieldset>
          <legend>Choose your month.</legend>
          <?php if(!empty($errors['chosen_total_goal_month'])) echo '<span class="error">' . $errors['chosen_total_goal_month'] . '</span>';?>
          <input type="radio" id="january" name="chosen_total_goal_month" value="january" required checked />
          <label for="january">
            <span class="form-label">january</span>
          </label>
          <input type="radio" id="february" name="chosen_total_goal_month" value="february" required />
          <label for="february">
            <span class="form-label">february</span>
          </label>
          <input type="radio" id="march" name="chosen_total_goal_month" value="march" required />
          <label for="march">
            <span class="form-label">march</span>
          </label>
          <input type="radio" id="april" name="chosen_total_goal_month" value="april" required />
          <label for="april">
            <span class="form-label">april</span>
          </label>
          <input type="radio" id="may" name="chosen_total_goal_month" value="may" required />
          <label for="may">
            <span class="form-label">may</span>
          </label>
          <input type="radio" id="june" name="chosen_total_goal_month" value="june" required />
          <label for="june">
            <span class="form-label">june</span>
          </label>
          <input type="radio" id="july" name="chosen_total_goal_month" value="july" required />
          <label for="july">
            <span class="form-label">july</span>
          </label>
          <input type="radio" id="august" name="chosen_total_goal_month" value="august" required />
          <label for="august">
            <span class="form-label">august</span>
          </label>
          <input type="radio" id="september" name="chosen_total_goal_month" value="september" required />
          <label for="september">
            <span class="form-label">september</span>
          </label>
          <input type="radio" id="october" name="chosen_total_goal_month" value="october" required />
          <label for="october">
            <span class="form-label">october</span>
          </label>
          <input type="radio" id="november" name="chosen_total_goal_month" value="november" required />
          <label for="november">
            <span class="form-label">november</span>
          </label>
          <input type="radio" id="december" name="chosen_total_goal_month" value="december" required />
          <label for="december">
            <span class="form-label">december</span>
          </label>
        </fieldset>
        <input type="submit" name="add_total_goal" value="submit">
      </form>
    </section>
  <?php endif; ?>

<?php endif; ?>

<?php if ($currentCategory == 'links'): ?>
  <section class="main-profile-links-sites">
    <h2 class="main-profile-links-sites-title hide">Sites</h2>
    <article class="main-profile-links-sites-article site-jac">
      <h3 class="links-sites-article-title site-jac-title">JAC</h3>
      <p class="links-sites-article-text">Jongeren Advies Centrum (JAC) geeft informatie, advies en hulp aan jongeren. </p>
    </article>
    <article class="main-profile-links-sites-article site-awel">
      <h3 class="links-sites-article-title site-awel-title">Awel</h3>
      <p class="links-sites-article-text">Awel luistert naar alle kinderen en jongeren met een vraag, een verhaal of een probleem.</p>
    </article>
    <article class="main-profile-links-sites-article site-cgg">
      <h3 class="links-sites-article-title site-cgg-title">CGG</h3>
      <p class="links-sites-article-text">CGG biedt medisch-psychiatrische en psychotherapeutische hulpverlening aan mensen met ernstige psychische problemen.</p>
    </article>
    <article class="main-profile-links-sites-article site-tejo">
      <h3 class="links-sites-article-title site-tejo-title">Tejo</h3>
      <p class="links-sites-article-text">TEJO biedt laagdrempelige, therapeutische ondersteuning aan jongeren, kortdurend, onmiddellijk, anoniem, en gratis.</p>
    </article>
  </section>
  <section class="main-profile-links-phone">
    <h2 class="main-profile-links-phone-title hide">Phone numbers</h2>
    <article class="main-pofile-links-phone-article phone-geweld">
      <h3 class="links-phone-article-title phone-geweld-title">Geweld</h3>
      <a href="tel:1217" class="links-phone-article-tel phone-geweld-tel" rel="nofollow">1217</a>
    </article>
    <article class="main-pofile-links-phone-article phone-awel">
      <h3 class="links-phone-article-title phone-awel-title">Awel</h3>
      <a href="tel:102" class="links-phone-article-tel phone-awel-tel" rel="nofollow">102</a>
    </article>
    <article class="main-pofile-links-phone-article phone-zelfmoordlijn">
      <h3 class="links-phone-article-title phone-zelfmoordlijn-title">Zelfmoordlijn</h3>
      <a href="tel:+1813" class="links-phone-article-tel phone-zelfmoordlijn-tel" rel="nofollow">1813</a>
    </article>
    <article class="main-pofile-links-phone-article phone-druglijn">
      <h3 class="links-phone-article-title phone-druglijn-title">Druglijn</h3>
      <a href="tel:078-15-10-20" class="links-phone-article-tel phone-druglijn-tel" rel="nofollow">078 / 15 10 20</a>
    </article>
    <article class="main-pofile-links-phone-article phone-teleonthaal">
      <h3 class="links-phone-article-title phone-teleonthaal-title">Teleonthaal</h3>
      <a href="tel:106" class="links-phone-article-tel phone-teleonthaal-tel" rel="nofollow">106</a>
    </article>
  </section>
<?php endif; ?>

