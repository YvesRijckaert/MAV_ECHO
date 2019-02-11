<?php if ($currentCategory == 'info') : ?>
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
          <input type="radio" class="info-form-goals-radio" name="lifegoal" id="reduce-stress" value="reduce-stress" required <?php if($_SESSION['user']['lifegoal'] == 'reduce-stress') echo 'checked' ?>/>
          <label for="reduce-stress" class="info-form-goals-option">
            <span>reduce stress</span>
          </label>
          <input type="radio" class="info-form-goals-radio" name="lifegoal" id="feel-happier" value="feel-happier" required <?php if($_SESSION['user']['lifegoal'] == 'feel-happier') echo 'checked' ?> />
          <label for="feel-happier" class="info-form-goals-option">
            <span>feel happier</span>
          </label>
          <input type="radio" class="info-form-goals-radio" name="lifegoal" id="decrease-anxiety" value="decrease-anxiety" required <?php if($_SESSION['user']['lifegoal'] == 'decrease-anxiety') echo 'checked' ?> />
          <label for="decrease-anxiety" class="info-form-goals-option">
            <span>decrease anxiety</span>
          </label>
          <input type="radio" class="info-form-goals-radio" name="lifegoal" id="build-confidence" value="build-confidence" required <?php if($_SESSION['user']['lifegoal'] == 'build-confidence') echo 'checked' ?> />
          <label for="build-confidence" class="info-form-goals-option">
            <span>build confidence</span>
          </label>
          <input type="radio" class="info-form-goals-radio" name="lifegoal" id="improve-social-skills" value="improve-social-skills" required <?php if($_SESSION['user']['lifegoal'] == 'improve-social-skills') echo 'checked' ?> />
          <label for="improve-social-skills" class="info-form-goals-option">
            <span>improve social skills</span>
          </label>
          <input type="radio" class="info-form-goals-radio" name="lifegoal" id="live-healthier" value="live-healthier" required <?php if($_SESSION['user']['lifegoal'] == 'live-healthier') echo 'checked' ?> />
          <label for="live-healthier" class="info-form-goals-option">
            <span>live healthier</span>
          </label>
          <input type="radio" class="info-form-goals-radio" name="lifegoal" id="think-positively" value="think-positively" required <?php if($_SESSION['user']['lifegoal'] == 'think-positively') echo 'checked' ?> />
          <label for="think-positively" class="info-form-goals-option">
            <span>think positively</span>
          </label>
        </div>
      </div>
      <label class="info-form-submit">
        <input type="submit" name="update-profile" class="info-form-submit-button"  value="done" />
        <span>done</span>
        <svg width="22px" height="16px" viewBox="0 0 22 16">
          <title>Done button</title>
          <desc>Icon for done button.</desc>
          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g transform="translate(-1294.000000, -742.000000)" stroke="#FFFFFF" stroke-linecap="round" stroke-width="2.4">
              <polyline points="1296 750.267785 1301.81878 756 1314 744"></polyline>
            </g>
          </g>
        </svg>
      </label>
    </form>
  </section>
<?php endif; ?>

<?php if ($currentCategory == 'customize'): ?>

  <?php if ($currentStep === 1): ?>
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
    <section class="main-profile-customize" id="main">
      <h2 class="main-profile-customize-title hide">Customize</h2>
      <article class="main-profile-customize-habits">
        <h3 class="customize-habits-title">Habits</h3>
        <ul class="customize-habits-list">
          <?php foreach ($currentHabits as $habit): {
            if ($habit['active']) {
                echo '<li class="customize-habits-list-item" style="background-color:' . $habit['habit_colour'] .'; border: .2rem solid ' . $habit['habit_colour'] . '">
                        <div class="customize-habits-list-item-wrap">
                          <span class="customize-habits-list-item-icon">' . $habit['habit_icon_white'] .'</span>
                          <span>' . $habit['habit_name'] . '</span>
                        </div>
                        <a href="index.php?page=profile&category=customize&delete-habit=' . $habit['habit_id']  .'">
                          <svg width="11px" height="11px" viewBox="0 0 11 11">
                            <title>Delete habit link</title>
                            <desc>Icon for delete habit link.</desc>
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <g transform="translate(-627.000000, -332.000000)" stroke="#ffffff" stroke-linecap="round" stroke-width="2.17756">
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
                        </svg>
                      </a>
                    </li>';
            } else {
              echo '<li class="customize-habits-list-item" style="border: .2rem solid ' . $habit['habit_colour'] . '; color: ' . $habit['habit_colour'] . '">
                      <a href="index.php?page=profile&category=customize&add-habit=' . $habit['habit_colour_name']  .'">
                        <svg width="14px" height="14px" viewBox="0 0 14 14">
                          <title>Add habit link</title>
                          <desc>Icon for add habit.</desc>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <g transform="translate(-321.000000, -710.000000)" stroke="' . $habit['habit_colour'] . '" stroke-linecap="round" stroke-width="2.17756">
                                  <g transform="translate(294.000000, 203.000000)">
                                      <g transform="translate(0.000000, 484.000000)">
                                          <g transform="translate(28.420480, 24.878000)">
                                              <path d="M5.98829,2.66453526e-15 L5.98829,10.8878"></path>
                                              <path d="M5.98829,2.66453526e-15 L5.98829,10.8878" transform="translate(5.988290, 5.443900) rotate(90.000000) translate(-5.988290, -5.443900) "></path>
                                          </g>
                                      </g>
                                  </g>
                              </g>
                          </g>
                        </svg>
                        <span>add habit</span>
                      </a>
                    </li>';
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
                echo '<li class="customize-goals-list-item" style="background-color: ' . $goal['repetitive']['habit_colour'] . '; border: .2rem solid ' . $goal['total_amount']['habit_colour'] . '">
                        <div class="customize-goals-list-item-wrap">
                          <span class="customize-goals-list-item-icon">' . $goal['repetitive']['habit_icon_white'] .'</span>
                          <span>' . $goal['repetitive']['habit_name'] . ', every ' . $goal['repetitive']['day'] . ' of ' . $goal['repetitive']['month'] . '</span>
                        </div>
                        <a href="index.php?page=profile&category=customize&goal-category=repetitive&delete-goal=' . $goal['repetitive']['repetitive_id']  .'">
                          <svg width="11px" height="11px" viewBox="0 0 11 11">
                              <title>Delete habit link</title>
                              <desc>Icon for delete habit link.</desc>
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(-627.000000, -332.000000)" stroke="#ffffff" stroke-linecap="round" stroke-width="2.17756">
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
                          </svg>
                        </a>
                      </li>';
              } else if(!isset($goal['streaks']['no-goal'])) {
                echo '<li class="customize-goals-list-item" style="background-color: ' . $goal['streaks']['habit_colour'] . '; border: .2rem solid ' . $goal['total_amount']['habit_colour'] . '">
                        <div class="customize-goals-list-item-wrap">
                          <span class="customize-goals-list-item-icon">' . $goal['streaks']['habit_icon_white'] .'</span>
                          <span>' . $goal['streaks']['habit_name'] . ', ' . $goal['streaks']['time_amount'] . ' ' . $goal['streaks']['time_type'] . ' in a row' . '</span>
                        </div>
                        <a href="index.php?page=profile&category=customize&goal-category=streaks&delete-goal=' . $goal['streaks']['streak_id']  .'">
                          <svg width="11px" height="11px" viewBox="0 0 11 11">
                            <title>Delete habit link</title>
                            <desc>Icon for delete habit link.</desc>
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <g transform="translate(-627.000000, -332.000000)" stroke="#ffffff" stroke-linecap="round" stroke-width="2.17756">
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
                          </svg>
                        </a>
                      </li>';
              } else if(!isset($goal['total_amount']['no-goal'])) {
                echo '<li class="customize-goals-list-item" style="background-color: ' . $goal['total_amount']['habit_colour'] . '; border: .2rem solid ' . $goal['total_amount']['habit_colour'] . '">
                        <div class="customize-goals-list-item-wrap">
                          <span class="customize-goals-list-item-icon">' . $goal['total_amount']['habit_icon_white'] .'</span>
                          <span>' . $goal['total_amount']['habit_name'] . ', ' . $goal['total_amount']['days_amount'] . ' days in ' . $goal['total_amount']['month'] . '</span>
                        </div>
                        <a href="index.php?page=profile&category=customize&goal-category=total-amount&delete-goal=' . $goal['total_amount']['total_amount_id']  .'">
                          <svg width="11px" height="11px" viewBox="0 0 11 11">
                            <title>Delete habit link</title>
                            <desc>Icon for delete habit link.</desc>
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <g transform="translate(-627.000000, -332.000000)" stroke="#ffffff" stroke-linecap="round" stroke-width="2.17756">
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
                          </svg>
                        </a>
                      </li>';
              }
              if(isset($goal['repetitive']['no-goal']) && isset($goal['streaks']['no-goal']) && isset($goal['total_amount']['no-goal'])) {
                echo '<li class="customize-goals-list-item" style="border: .2rem solid ' . $goal['repetitive']['habit_colour'] . '; color: ' . $goal['repetitive']['habit_colour'] . '">
                        <a href="index.php?page=profile&category=customize&add-goal=' . $goal['repetitive']['habit_name']  .'">
                          <svg width="14px" height="14px" viewBox="0 0 14 14">
                            <title>Add habit link</title>
                            <desc>Icon for add habit.</desc>
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <g transform="translate(-321.000000, -710.000000)" stroke="' . $goal['repetitive']['habit_colour'] . '" stroke-linecap="round" stroke-width="2.17756">
                                <g transform="translate(294.000000, 203.000000)">
                                  <g transform="translate(0.000000, 484.000000)">
                                    <g transform="translate(28.420480, 24.878000)">
                                      <path d="M5.98829,2.66453526e-15 L5.98829,10.8878"></path>
                                      <path d="M5.98829,2.66453526e-15 L5.98829,10.8878" transform="translate(5.988290, 5.443900) rotate(90.000000) translate(-5.988290, -5.443900) "></path>
                                    </g>
                                  </g>
                                </g>
                              </g>
                            </g>
                          </svg>
                          <span>add goal for ' . $goal['repetitive']['habit_name'] . '</span>
                        </a>
                      </li>';
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
    <section class="main-profile-add-habit" id="main">
      <h2 class="main-profile-add-habit-title">add habit</h2>
      <p class="main-profile-add-habit-subtitle">choose or write down a new habit</p>
      <a href="index.php?page=profile&category=customize" class="main-profile-add-habit-back">
        <svg width="30px" height="23px" viewBox="0 0 30 23">
          <title>Back button</title>
          <desc>Icon for back button.</desc>
          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g transform="translate(-49.000000, -126.000000)">
              <g transform="translate(52.000000, 128.000000)">
                <polyline stroke="#2b2b2b" stroke-width="3" stroke-linecap="round" transform="translate(4.736757, 9.473513) rotate(-180.000000) translate(-4.736757, -9.473513) " points="0 0 9.47351317 9.47351317 0 18.9470263"></polyline>
                <rect fill="#2b2b2b" x="1.58823529" y="7.94117647" width="25.4117647" height="3" rx="1.5"></rect>
              </g>
            </g>
          </g>
        </svg>
      </a>
      <?php if(!empty($errors['add-habit'])) echo '<p class="main-profile-add-habit-error error">' . $errors['add-habit'] . '</p>';?>
      <form class="main-profile-add-habit-form" method="post">
        <fieldset class="add-habit-form-field add-habit-suggested">
          <legend class="add-habit-form-field-legend">suggested</legend>
          <input type="radio" class="add-habit-form-radio" id="test" class="add-habit-form-input" name="chosen_habit" value="test" />
          <label for="test" class="add-habit-form-label">
            <span>test</span>
          </label>
        </fieldset>
        <fieldset class="add-habit-form-field add-habit-write">
          <legend class="add-habit-form-field-legend">write</legend>
          <input type="radio" class="add-habit-form-radio" id="neither" class="add-habit-form-input" name="chosen_habit" value="neither" checked />
          <label for="neither" class="add-habit-form-label">
            <span>Write down my own habit</span>
          </label>
          <input type="text" class="add-habit-form-input add-habit-form-input-text" name="custom_habit" placeholder="write down a habit" />
        </fieldset>
        <fieldset class="add-habit-form-field add-habit-all">
          <legend class="add-habit-form-field-legend">all</legend>
          <div class="add-habit-form-field-all">
            <?php foreach($allPossibleHabits as $habit): ?>
              <input type="radio" class="add-habit-form-radio" id="<?php echo $habit['data_habit_name_id'] ?>" class="add-habit-form-input" name="chosen_habit" value="<?php echo $habit['data_habit_name_id'] ?>" />
              <label for="<?php echo $habit['data_habit_name_id'] ?>" class="add-habit-form-label">
                <span><?php echo $habit['habit_name'] ?></span>
              </label>
            <?php endforeach; ?>
          </div>
        </fieldset>
        <label class="add-habit-form-submit">
          <span>next</span>
          <svg width="16px" height="12px" viewBox="0 0 16 12">
            <title>Next button</title>
            <desc>Icon for next button.</desc>
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <g transform="translate(-1385.000000, -130.000000)">
                <g transform="translate(1392.000000, 135.692308) rotate(-180.000000) translate(-1392.000000, -135.692308) translate(1385.000000, 130.692308)">
                  <polyline stroke="#ffffff" stroke-width="2" stroke-linecap="round" transform="translate(2.550561, 4.831892) rotate(-180.000000) translate(-2.550561, -4.831892) " points="0.269230769 0 4.83189171 4.83189171 0.269230769 9.66378341"></polyline>
                  <rect fill="#ffffff" x="0" y="4" width="13.6832579" height="2" rx="1"></rect>
                </g>
              </g>
            </g>
          </svg>
          <input type="submit" class="add-habit-form-submit-button" name="add-habit-1" value="next" />
        </label>
      </form>
    </section>
  <?php endif; ?>

  <?php if ($currentStep === 'add-habit-2'): ?>
    <section class="main-profile-add-habit" id="main">
      <h2 class="main-profile-add-habit-title">add habit</h2>
      <p class="main-profile-add-habit-subtitle">choose a shape</p>
      <a href="index.php?page=profile&category=customize" class="main-profile-add-habit-back">
        <svg width="30px" height="23px" viewBox="0 0 30 23">
          <title>Back button</title>
          <desc>Icon for back button.</desc>
          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g transform="translate(-49.000000, -126.000000)">
              <g transform="translate(52.000000, 128.000000)">
                <polyline stroke="#2b2b2b" stroke-width="3" stroke-linecap="round" transform="translate(4.736757, 9.473513) rotate(-180.000000) translate(-4.736757, -9.473513) " points="0 0 9.47351317 9.47351317 0 18.9470263"></polyline>
                <rect fill="#2b2b2b" x="1.58823529" y="7.94117647" width="25.4117647" height="3" rx="1.5"></rect>
              </g>
            </g>
          </g>
        </svg>
      </a>
      <?php if(!empty($errors['add-habit-icon'])) echo '<p class="main-profile-add-habit-error error">' . $errors['add-habit-icon'] . '</p>';?>
      <form class="main-profile-add-habit-form-shape" method="post">
        <fieldset class="add-habit-form-shape-field">
          <legend class="add-habit-form-field-legend">shapes</legend>
          <div class="add-habit-form-field-shapes-all">
            <?php foreach($allPossibleHabitIcons as $icon): ?>
              <input type="radio" id="<?php echo $icon['data_habit_icon_id'] ?>" name="chosen_habit_icon" value="<?php echo $icon['data_habit_icon_id'] ?>" class="form-input" />
              <label for="<?php echo $icon['data_habit_icon_id'] ?>">
                <span class="form-label"><?php echo $icon['habit_icon'] ?></span>
              </label>
            <?php endforeach; ?>
          </div>
        </fieldset>
        <label class="add-habit-form-submit">
          <svg width="22px" height="16px" viewBox="0 0 22 16">
            <title>Done button</title>
            <desc>Icon for done button.</desc>
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <g transform="translate(-1294.000000, -742.000000)" stroke="#FFFFFF" stroke-linecap="round" stroke-width="2.4">
                <polyline points="1296 750.267785 1301.81878 756 1314 744"></polyline>
              </g>
            </g>
          </svg>
          <span>done</span>
          <input type="submit" class="add-habit-form-submit-button" name="add-habit-2" value="done" />
        </label>
      </form>
    </section>
  <?php endif; ?>

  <?php if ($currentStep === 'add-goal-1'): ?>
    <section class="main-profile-add-goal" id="main">
      <h2 class="main-profile-add-goal-title">add goal</h2>
      <p class="main-profile-add-goal-subtitle">choose a goal type</p>
      <a href="index.php?page=profile&category=customize" class="main-profile-add-goal-back">
        <svg width="30px" height="23px" viewBox="0 0 30 23">
          <title>Back button</title>
          <desc>Icon for back button.</desc>
          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g transform="translate(-49.000000, -126.000000)">
              <g transform="translate(52.000000, 128.000000)">
                <polyline stroke="#2b2b2b" stroke-width="3" stroke-linecap="round" transform="translate(4.736757, 9.473513) rotate(-180.000000) translate(-4.736757, -9.473513) " points="0 0 9.47351317 9.47351317 0 18.9470263"></polyline>
                <rect fill="#2b2b2b" x="1.58823529" y="7.94117647" width="25.4117647" height="3" rx="1.5"></rect>
              </g>
            </g>
          </g>
        </svg>
      </a>
      <ul class="main-profile-add-goal-types">
        <li class="add-goal-type">
          <a href="index.php?page=profile&category=customize&add-goal=<?php echo $habit ?>&goal-type=repetitive">
            <p class="add-goal-type-title">Repetitive</p>
            <p class="add-goal-type-subtitle"><span class="add-goal-type-subtitle-abbr">e.g.</span> <span class="add-goal-type-subtitle-habitname" style="color: <?php echo $habit_colour ?>"><?php echo $habit ?></span>, every <strong>thursday</strong> of <strong>june</strong>.</p>
          </a>
        </li>
        <li class="add-goal-type">
          <a href="index.php?page=profile&category=customize&add-goal=<?php echo $habit ?>&goal-type=streak">
            <p class="add-goal-type-title">Streak</p>
            <p class="add-goal-type-subtitle"><span class="add-goal-type-subtitle-abbr">e.g.</span> <span class="add-goal-type-subtitle-habitname" style="color: <?php echo $habit_colour ?>"><?php echo $habit ?></span>, <strong>10 days</strong> in a row.</p>
          </a>
        </li>
        <li class="add-goal-type">
          <a href="index.php?page=profile&category=customize&add-goal=<?php echo $habit ?>&goal-type=total">
            <p class="add-goal-type-title">Total</p>
            <p class="add-goal-type-subtitle"><span class="add-goal-type-subtitle-abbr">e.g.</span> <span class="add-goal-type-subtitle-habitname" style="color: <?php echo $habit_colour ?>"><?php echo $habit ?></span>, <strong>20 days</strong> in <strong>january</strong>.</p>
          </a>
        </li>
      </ul>
    </section>
  <?php endif; ?>

  <?php if ($currentStep === 'add-goal-repetitive'): ?>
    <section class="main-profile-add-goal" id="main">
      <h2 class="main-profile-add-goal-title">add goal</h2>
      <p class="main-profile-add-goal-subtitle">edit the goal</p>
      <a href="index.php?page=profile&category=customize&add-goal=<?php echo $habit ?>" class="main-profile-add-goal-back">
        <svg width="30px" height="23px" viewBox="0 0 30 23">
          <title>Back button</title>
          <desc>Icon for back button.</desc>
          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g transform="translate(-49.000000, -126.000000)">
              <g transform="translate(52.000000, 128.000000)">
                <polyline stroke="#2b2b2b" stroke-width="3" stroke-linecap="round" transform="translate(4.736757, 9.473513) rotate(-180.000000) translate(-4.736757, -9.473513) " points="0 0 9.47351317 9.47351317 0 18.9470263"></polyline>
                <rect fill="#2b2b2b" x="1.58823529" y="7.94117647" width="25.4117647" height="3" rx="1.5"></rect>
              </g>
            </g>
          </g>
        </svg>
      </a>
      <p class="main-profile-add-goal-text"><span class="add-goals-example">example:</span> <span style="color: <?php echo $habit_colour ?>"><?php echo $habit ?></span>, every <span class="repetitive-day">thursday</span> of <span class="repetitive-month">june</span></p>
      <form method="post" class="main-profile-add-goal-form add-goal-repetitive-form">
        <fieldset class="add-goal-form-field add-goal-form-field-day">
          <legend class="add-goal-form-field-legend">Choose your day.</legend>
          <?php if(!empty($errors['chosen_repetitive_goal_day'])) echo '<span class="error">' . $errors['chosen_repetitive_goal_day'] . '</span>';?>
          <input type="radio" id="monday" class="add-goal-repetitive-day-radio" name="chosen_repetitive_goal_day" value="monday" required checked />
          <label for="monday" class="add-goal-repetitive-day-label">
            <span class="form-label">monday</span>
          </label>
          <input type="radio" id="tuesday" class="add-goal-repetitive-day-radio" name="chosen_repetitive_goal_day" value="tuesday" required />
          <label for="tuesday" class="add-goal-repetitive-day-label">
            <span class="form-label">tuesday</span>
          </label>
          <input type="radio" id="wednesday" class="add-goal-repetitive-day-radio" name="chosen_repetitive_goal_day" value="wednesday" required />
          <label for="wednesday" class="add-goal-repetitive-day-label">
            <span class="form-label">wednesday</span>
          </label>
          <input type="radio" id="thursday" class="add-goal-repetitive-day-radio" name="chosen_repetitive_goal_day" value="thursday" required />
          <label for="thursday" class="add-goal-repetitive-day-label">
            <span class="form-label">thursday</span>
          </label>
          <input type="radio" id="friday" class="add-goal-repetitive-day-radio" name="chosen_repetitive_goal_day" value="friday" required />
          <label for="friday" class="add-goal-repetitive-day-label">
            <span class="form-label">friday</span>
          </label>
          <input type="radio" id="saturday" class="add-goal-repetitive-day-radio" name="chosen_repetitive_goal_day" value="saturday" required />
          <label for="saturday" class="add-goal-repetitive-day-label">
            <span class="form-label">saturday</span>
          </label>
          <input type="radio" id="sunday" class="add-goal-repetitive-day-radio" name="chosen_repetitive_goal_day" value="sunday" required />
          <label for="sunday" class="add-goal-repetitive-day-label">
            <span class="form-label">sunday</span>
          </label>
        </fieldset>
        <fieldset class="add-goal-form-field add-goal-form-field-month">
          <legend class="add-goal-form-field-legend">Choose your month.</legend>
          <?php if(!empty($errors['chosen_repetitive_goal_month'])) echo '<span class="error">' . $errors['chosen_repetitive_goal_month'] . '</span>';?>
          <input type="radio" id="january" class="add-goal-repetitive-month-radio" name="chosen_repetitive_goal_month" value="january" required checked />
          <label for="january" class="add-goal-repetitive-month-label">
            <span class="form-label">january</span>
          </label>
          <input type="radio" id="february" class="add-goal-repetitive-month-radio" name="chosen_repetitive_goal_month" value="february" required />
          <label for="february" class="add-goal-repetitive-month-label">
            <span class="form-label">february</span>
          </label>
          <input type="radio" id="march" class="add-goal-repetitive-month-radio" name="chosen_repetitive_goal_month" value="march" required />
          <label for="march" class="add-goal-repetitive-month-label">
            <span class="form-label">march</span>
          </label>
          <input type="radio" id="april" class="add-goal-repetitive-month-radio" name="chosen_repetitive_goal_month" value="april" required />
          <label for="april" class="add-goal-repetitive-month-label">
            <span class="form-label">april</span>
          </label>
          <input type="radio" id="may" class="add-goal-repetitive-month-radio" name="chosen_repetitive_goal_month" value="may" required />
          <label for="may" class="add-goal-repetitive-month-label">
            <span class="form-label">may</span>
          </label>
          <input type="radio" id="june" class="add-goal-repetitive-month-radio" name="chosen_repetitive_goal_month" value="june" required />
          <label for="june" class="add-goal-repetitive-month-label">
            <span class="form-label">june</span>
          </label>
          <input type="radio" id="july" class="add-goal-repetitive-month-radio" name="chosen_repetitive_goal_month" value="july" required />
          <label for="july" class="add-goal-repetitive-month-label">
            <span class="form-label">july</span>
          </label>
          <input type="radio" id="august" class="add-goal-repetitive-month-radio" name="chosen_repetitive_goal_month" value="august" required />
          <label for="august" class="add-goal-repetitive-month-label">
            <span class="form-label">august</span>
          </label>
          <input type="radio" id="september" class="add-goal-repetitive-month-radio" name="chosen_repetitive_goal_month" value="september" required />
          <label for="september" class="add-goal-repetitive-month-label">
            <span class="form-label">september</span>
          </label>
          <input type="radio" id="october" class="add-goal-repetitive-month-radio" name="chosen_repetitive_goal_month" value="october" required />
          <label for="october" class="add-goal-repetitive-month-label">
            <span class="form-label">october</span>
          </label>
          <input type="radio" id="november" class="add-goal-repetitive-month-radio" name="chosen_repetitive_goal_month" value="november" required />
          <label for="november" class="add-goal-repetitive-month-label">
            <span class="form-label">november</span>
          </label>
          <input type="radio" id="december" class="add-goal-repetitive-month-radio" name="chosen_repetitive_goal_month" value="december" required />
          <label for="december" class="add-goal-repetitive-month-label">
            <span class="form-label">december</span>
          </label>
        </fieldset>
        <label class="add-goal-form-submit">
          <svg width="22px" height="16px" viewBox="0 0 22 16">
            <title>Done button</title>
            <desc>Icon for done button.</desc>
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <g transform="translate(-1294.000000, -742.000000)" stroke="#FFFFFF" stroke-linecap="round" stroke-width="2.4">
                <polyline points="1296 750.267785 1301.81878 756 1314 744"></polyline>
              </g>
            </g>
          </svg>
          <span>done</span>
          <input type="submit" class="add-goal-form-submit-button" name="add_repetitive_goal" value="done">
        </label>
      </form>
    </section>
  <?php endif; ?>

  <?php if ($currentStep === 'add-goal-streak'): ?>
    <section class="main-profile-add-goal" id="main">
      <h2 class="main-profile-add-goal-title">add goal</h2>
      <p class="main-profile-add-goal-subtitle">edit the goal</p>
      <a href="index.php?page=profile&category=customize&add-goal=<?php echo $habit ?>" class="main-profile-add-goal-back">
        <svg width="30px" height="23px" viewBox="0 0 30 23">
          <title>Back button</title>
          <desc>Icon for back button.</desc>
          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g transform="translate(-49.000000, -126.000000)">
              <g transform="translate(52.000000, 128.000000)">
                <polyline stroke="#2b2b2b" stroke-width="3" stroke-linecap="round" transform="translate(4.736757, 9.473513) rotate(-180.000000) translate(-4.736757, -9.473513) " points="0 0 9.47351317 9.47351317 0 18.9470263"></polyline>
                <rect fill="#2b2b2b" x="1.58823529" y="7.94117647" width="25.4117647" height="3" rx="1.5"></rect>
              </g>
            </g>
          </g>
        </svg>
      </a>
      <p class="main-profile-add-goal-text"><span class="add-goals-example">example:</span> <span style="color: <?php echo $habit_colour ?>"><?php echo $habit ?></span>, <span class="streak-amount"><span>2</span> days</span> in a row.</p>
      <form method="post" class="main-profile-add-goal-form add-goal-streak-form">
        <fieldset class="add-goal-form-field">
          <legend class="add-goal-form-field-legend">Choose amount of days</legend>
          <?php if(!empty($errors['chosen_streak_goal_number'])) echo '<span class="error">' . $errors['chosen_streak_goal_number'] . '</span>';?>
          <label class="add-goal-form-field-stepper">
            <input type="number" name="chosen_streak_goal_number" value="2" min="2" max="30" required />
          </label>
        </fieldset>
        <label class="add-goal-form-submit">
          <svg width="22px" height="16px" viewBox="0 0 22 16">
            <title>Done button</title>
            <desc>Icon for done button.</desc>
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <g transform="translate(-1294.000000, -742.000000)" stroke="#FFFFFF" stroke-linecap="round" stroke-width="2.4">
                <polyline points="1296 750.267785 1301.81878 756 1314 744"></polyline>
              </g>
            </g>
          </svg>
          <span>done</span>
          <input type="submit" class="add-goal-form-submit-button" name="add_streak_goal" value="done">
        </label>
      </form>
    </section>
  <?php endif; ?>

  <?php if ($currentStep === 'add-goal-total'): ?>
    <section class="main-profile-add-goal" id="main">
      <h2 class="main-profile-add-goal-title">add goal</h2>
      <p class="main-profile-add-goal-subtitle">edit the goal</p>
      <a href="index.php?page=profile&category=customize&add-goal=<?php echo $habit ?>" class="main-profile-add-goal-back">
        <svg width="30px" height="23px" viewBox="0 0 30 23">
          <title>Back button</title>
          <desc>Icon for back button.</desc>
          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g transform="translate(-49.000000, -126.000000)">
              <g transform="translate(52.000000, 128.000000)">
                <polyline stroke="#2b2b2b" stroke-width="3" stroke-linecap="round" transform="translate(4.736757, 9.473513) rotate(-180.000000) translate(-4.736757, -9.473513) " points="0 0 9.47351317 9.47351317 0 18.9470263"></polyline>
                <rect fill="#2b2b2b" x="1.58823529" y="7.94117647" width="25.4117647" height="3" rx="1.5"></rect>
              </g>
            </g>
          </g>
        </svg>
      </a>
      <p class="main-profile-add-goal-text"><span class="add-goals-example">example:</span> <span style="color: <?php echo $habit_colour ?>"><?php echo $habit ?></span>, <span class="total-amount"><span>2</span> days</span> in <span class="total-month">january</span>.</p>
      <form method="post" class="main-profile-add-goal-form add-goal-total-form">
        <fieldset class="add-goal-form-field">
          <legend class="add-goal-form-field-legend">Choose amount of days</legend>
          <?php if(!empty($errors['chosen_total_goal_number'])) echo '<span class="error">' . $errors['chosen_total_goal_number'] . '</span>';?>
          <label class="add-goal-form-field-stepper">
            <input type="number" name="chosen_total_goal_number" value="2" min="2" max="30" required />
          <label class="add-goal-form-field-stepper">
        </fieldset>
        <fieldset class="add-goal-form-field add-goal-form-field-month">
          <legend class="add-goal-form-field-legend">Choose your month.</legend>
          <?php if(!empty($errors['chosen_total_goal_month'])) echo '<span class="error">' . $errors['chosen_total_goal_month'] . '</span>';?>
          <input type="radio" id="january" class="add-goal-total-month-radio" name="chosen_total_goal_month" value="january" required checked />
          <label for="january" class="add-goal-total-month-label">
            <span class="form-label">january</span>
          </label>
          <input type="radio" id="february" class="add-goal-total-month-radio" name="chosen_total_goal_month" value="february" required />
          <label for="february" class="add-goal-total-month-label">
            <span class="form-label">february</span>
          </label>
          <input type="radio" id="march" class="add-goal-total-month-radio" name="chosen_total_goal_month" value="march" required />
          <label for="march" class="add-goal-total-month-label">
            <span class="form-label">march</span>
          </label>
          <input type="radio" id="april" class="add-goal-total-month-radio" name="chosen_total_goal_month" value="april" required />
          <label for="april" class="add-goal-total-month-label">
            <span class="form-label">april</span>
          </label>
          <input type="radio" id="may" class="add-goal-total-month-radio" name="chosen_total_goal_month" value="may" required />
          <label for="may" class="add-goal-total-month-label">
            <span class="form-label">may</span>
          </label>
          <input type="radio" id="june" class="add-goal-total-month-radio" name="chosen_total_goal_month" value="june" required />
          <label for="june" class="add-goal-total-month-label">
            <span class="form-label">june</span>
          </label>
          <input type="radio" id="july" class="add-goal-total-month-radio" name="chosen_total_goal_month" value="july" required />
          <label for="july" class="add-goal-total-month-label">
            <span class="form-label">july</span>
          </label>
          <input type="radio" id="august" class="add-goal-total-month-radio" name="chosen_total_goal_month" value="august" required />
          <label for="august" class="add-goal-total-month-label">
            <span class="form-label">august</span>
          </label>
          <input type="radio" id="september" class="add-goal-total-month-radio" name="chosen_total_goal_month" value="september" required />
          <label for="september" class="add-goal-total-month-label">
            <span class="form-label">september</span>
          </label>
          <input type="radio" id="october" class="add-goal-total-month-radio" name="chosen_total_goal_month" value="october" required />
          <label for="october" class="add-goal-total-month-label">
            <span class="form-label">october</span>
          </label>
          <input type="radio" id="november" class="add-goal-total-month-radio" name="chosen_total_goal_month" value="november" required />
          <label for="november" class="add-goal-total-month-label">
            <span class="form-label">november</span>
          </label>
          <input type="radio" id="december" class="add-goal-total-month-radio" name="chosen_total_goal_month" value="december" required />
          <label for="december" class="add-goal-total-month-label">
            <span class="form-label">december</span>
          </label>
        </fieldset>
        <label class="add-goal-form-submit">
          <svg width="22px" height="16px" viewBox="0 0 22 16">
            <title>Done button</title>
            <desc>Icon for done button.</desc>
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <g transform="translate(-1294.000000, -742.000000)" stroke="#FFFFFF" stroke-linecap="round" stroke-width="2.4">
                <polyline points="1296 750.267785 1301.81878 756 1314 744"></polyline>
              </g>
            </g>
          </svg>
          <span>done</span>
          <input type="submit" class="add-goal-form-submit-button" name="add_total_goal" value="done">
        </label>
      </form>
    </section>
  <?php endif; ?>

<?php endif; ?>

<?php if ($currentCategory == 'links'): ?>
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
  <section class="main-profile-links-sites">
    <h2 class="main-profile-links-sites-title hide">Sites</h2>
    <article class="main-profile-links-sites-article site-jac">
      <a href="https://www.caw.be/jac/" class="links-sites-article-link">
        <h3 class="links-sites-article-title site-jac-title">JAC</h3>
        <svg width="9px" height="8px" viewBox="0 0 9 8" class="links-sites-article-arrow">
          <title>Arrow</title>
          <desc>Arrow icon.</desc>
          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g transform="translate(-367.000000, -253.000000)">
              <g transform="translate(300.000000, 243.000000)">
                <g transform="translate(71.293934, 14.392462) rotate(-225.000000) translate(-71.293934, -14.392462) translate(65.293934, 9.592462)">
                  <polyline stroke="#2B2B2B" stroke-width="1.2" stroke-linecap="round" transform="translate(2.878118, 5.001472) rotate(-180.000000) translate(-2.878118, -5.001472) " points="0.864996396 0.975228767 4.89123949 5.00147186 0.864996396 9.02771496"></polyline>
                  <rect fill="#2B2B2B" x="0.848528137" y="4.44852814" width="10.125" height="1.2" rx="0.6"></rect>
                </g>
              </g>
            </g>
          </g>
        </svg>
      </a>
      <p class="links-sites-article-text">Jongeren Advies Centrum (JAC) geeft informatie, advies en hulp aan jongeren. </p>
    </article>
    <article class="main-profile-links-sites-article site-awel">
      <a href="https://awel.be/" class="links-sites-article-link">
        <h3 class="links-sites-article-title site-awel-title">Awel</h3>
        <svg width="9px" height="8px" viewBox="0 0 9 8" class="links-sites-article-arrow">
          <title>Arrow</title>
          <desc>Arrow icon.</desc>
          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g transform="translate(-367.000000, -253.000000)">
              <g transform="translate(300.000000, 243.000000)">
                <g transform="translate(71.293934, 14.392462) rotate(-225.000000) translate(-71.293934, -14.392462) translate(65.293934, 9.592462)">
                  <polyline stroke="#2B2B2B" stroke-width="1.2" stroke-linecap="round" transform="translate(2.878118, 5.001472) rotate(-180.000000) translate(-2.878118, -5.001472) " points="0.864996396 0.975228767 4.89123949 5.00147186 0.864996396 9.02771496"></polyline>
                  <rect fill="#2B2B2B" x="0.848528137" y="4.44852814" width="10.125" height="1.2" rx="0.6"></rect>
                </g>
              </g>
            </g>
          </g>
        </svg>
      </a>
      <p class="links-sites-article-text">Awel luistert naar alle kinderen en jongeren met een vraag, een verhaal of een probleem.</p>
    </article>
    <article class="main-profile-links-sites-article site-cgg">
      <a href="https://www.zorg-en-gezondheid.be/centra-voor-geestelijke-gezondheidszorg" class="links-sites-article-link">
        <h3 class="links-sites-article-title site-cgg-title">CGG</h3>
        <svg width="9px" height="8px" viewBox="0 0 9 8" class="links-sites-article-arrow">
          <title>Arrow</title>
          <desc>Arrow icon.</desc>
          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g transform="translate(-367.000000, -253.000000)">
              <g transform="translate(300.000000, 243.000000)">
                <g transform="translate(71.293934, 14.392462) rotate(-225.000000) translate(-71.293934, -14.392462) translate(65.293934, 9.592462)">
                  <polyline stroke="#2B2B2B" stroke-width="1.2" stroke-linecap="round" transform="translate(2.878118, 5.001472) rotate(-180.000000) translate(-2.878118, -5.001472) " points="0.864996396 0.975228767 4.89123949 5.00147186 0.864996396 9.02771496"></polyline>
                  <rect fill="#2B2B2B" x="0.848528137" y="4.44852814" width="10.125" height="1.2" rx="0.6"></rect>
                </g>
              </g>
            </g>
          </g>
        </svg>
      </a>
      <p class="links-sites-article-text">CGG biedt medisch-psychiatrische en psychotherapeutische hulpverlening aan mensen met ernstige psychische problemen.</p>
    </article>
    <article class="main-profile-links-sites-article site-tejo">
      <a href="http://www.tejo.be/" class="links-sites-article-link">
        <h3 class="links-sites-article-title site-tejo-title">Tejo</h3>
        <svg width="9px" height="8px" viewBox="0 0 9 8" class="links-sites-article-arrow">
          <title>Arrow</title>
          <desc>Arrow icon.</desc>
          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g transform="translate(-367.000000, -253.000000)">
              <g transform="translate(300.000000, 243.000000)">
                <g transform="translate(71.293934, 14.392462) rotate(-225.000000) translate(-71.293934, -14.392462) translate(65.293934, 9.592462)">
                  <polyline stroke="#2B2B2B" stroke-width="1.2" stroke-linecap="round" transform="translate(2.878118, 5.001472) rotate(-180.000000) translate(-2.878118, -5.001472) " points="0.864996396 0.975228767 4.89123949 5.00147186 0.864996396 9.02771496"></polyline>
                  <rect fill="#2B2B2B" x="0.848528137" y="4.44852814" width="10.125" height="1.2" rx="0.6"></rect>
                </g>
              </g>
            </g>
          </g>
        </svg>
      </a>
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

