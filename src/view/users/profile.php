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
        <a href="#" class="info-form-password-link">change password</a>
      </div>
      <div class="info-form-group info-form-goals">
        <p class="info-form-label-text">overall goal</p>
        <?php if(!empty($errors['lifegoal'])) echo '<span class="error">' . $errors['lifegoal'] . '</span>';?>
        <div class="info-form-goals-options">
          <input type="radio" class="info-form-goals-radio" name="lifegoal" id="document-life" value="document-life" required <?php if($_SESSION['user']['lifegoal'] == 'document-life') echo 'checked' ?>/>
          <label for="document-life" class="info-form-goals-option">
            <span>document life</span>
          </label>
          <input type="radio" class="info-form-goals-radio" name="lifegoal" id="feel-happier" value="feel-happier" required <?php if($_SESSION['user']['lifegoal'] == 'feel-happier') echo 'checked' ?> />
          <label for="feel-happier" class="info-form-goals-option">
            <span>feel happier</span>
          </label>
          <input type="radio" class="info-form-goals-radio" name="lifegoal" id="reduce-stress" value="reduce-stress" required <?php if($_SESSION['user']['lifegoal'] == 'reduce-stress') echo 'checked' ?> />
          <label for="reduce-stress" class="info-form-goals-option">
            <span>reduce stress</span>
          </label>
          <input type="radio" class="info-form-goals-radio" name="lifegoal" id="live-healthier" value="live-healthier" required <?php if($_SESSION['user']['lifegoal'] == 'live-healthier') echo 'checked' ?> />
          <label for="live-healthier" class="info-form-goals-option">
            <span>live healthier</span>
          </label>
          <input type="radio" class="info-form-goals-radio" name="lifegoal" id="reach-life-goals" value="reach-life-goals" required <?php if($_SESSION['user']['lifegoal'] == 'reach-life-goals') echo 'checked' ?> />
          <label for="reach-life-goals" class="info-form-goals-option">
            <span>reach life goals</span>
          </label>
          <input type="radio" class="info-form-goals-radio" name="lifegoal" id="none-of-the-above" value="none-of-the-above" required <?php if($_SESSION['user']['lifegoal'] == 'none-of-the-above') echo 'checked' ?> />
          <label for="none-of-the-above" class="info-form-goals-option">
            <span>none of the above</span>
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
    <a class="main-profile-info-logout" href="index.php?page=logout">log out</a>
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
            if ($habit['active']) { ?>
            <li class="customize-habits-list-item" style="background-color: <?php echo $habit['habit_colour'] ?>; border: .2rem solid <?php echo $habit['habit_colour']; ?>">
              <div class="customize-habits-list-item-wrap">
                <span class="customize-habits-list-item-icon">
                  <svg width="30px" height="30px" viewbox="0 0 180 180">
                    <g fill="#ffffff" stroke="none" stroke-width="1" fill-rule="evenodd">
                      <?php echo $habit['habit_icon'] ?>
                    </g>
                  </svg>
                </span>
                <span><?php echo $habit['habit_name'] ?></span>
              </div>
              <a href="index.php?page=profile&category=customize&delete-habit=<?php echo $habit['habit_id']  ?>">
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
            </li>
            <?php } else { ?>
            <li class="customize-habits-list-item" style="border: .2rem solid <?php echo $habit['habit_colour'] ?>; color: <?php echo $habit['habit_colour'] ?>;">
              <a href="index.php?page=profile&category=customize&add-habit=<?php echo $habit['habit_colour_name'] ?>">
                <svg width="14px" height="14px" viewBox="0 0 14 14">
                  <title>Add habit link</title>
                  <desc>Icon for add habit.</desc>
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <g transform="translate(-321.000000, -710.000000)" stroke="<?php echo $habit['habit_colour'] ?>" stroke-linecap="round" stroke-width="2.17756">
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
            </li>
            <?php }
          };
          endforeach;
          ?>
        </ul>
      </article>
      <article class="main-profile-customize-goals">
        <h3 class="customize-goals-title">Goals</h3>
        <?php
          if(!empty($currentGoals)) { ?>
            <ul class="customize-goals-list">
            <?php foreach ($currentGoals as $goal ): {
              if(!isset($goal['repetitive']['no-goal'])) { ?>
                <li class="customize-goals-list-item" style="background-color: <?php echo $goal['repetitive']['habit_colour'] ?>; border: .2rem solid <?php echo $goal['total_amount']['habit_colour'] ?>;">
                  <div class="customize-goals-list-item-wrap">
                    <span class="customize-goals-list-item-icon">
                      <svg width="30px" height="30px" viewbox="0 0 180 180">
                        <g fill="#ffffff" stroke="none" stroke-width="1" fill-rule="evenodd">
                          <?php echo $goal['repetitive']['habit_icon'] ?>
                        </g>
                      </svg>
                    </span>
                    <span><?php echo $goal['repetitive']['habit_name'] ?>, every <?php echo $goal['repetitive']['day'] ?> of <?php echo $goal['repetitive']['month'] ?></span>
                  </div>
                  <a href="index.php?page=profile&category=customize&goal-category=repetitive&delete-goal=<?php echo $goal['repetitive']['repetitive_id'] ?>">
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
                </li>
              <?php } else if(!isset($goal['streaks']['no-goal'])) { ?>
                <li class="customize-goals-list-item" style="background-color: <?php echo $goal['streaks']['habit_colour'] ?>; border: .2rem solid <?php echo $goal['total_amount']['habit_colour'] ?>;">
                  <div class="customize-goals-list-item-wrap">
                    <span class="customize-goals-list-item-icon">
                      <svg width="30px" height="30px" viewbox="0 0 180 180">
                        <g fill="#ffffff" stroke="none" stroke-width="1" fill-rule="evenodd">
                          <?php echo $goal['streaks']['habit_icon'] ?>
                        </g>
                      </svg>
                    </span>
                    <span><?php echo $goal['streaks']['habit_name'] ?>, <?php echo $goal['streaks']['time_amount'] ?> <?php echo $goal['streaks']['time_type'] ?> in a row</span>
                  </div>
                  <a href="index.php?page=profile&category=customize&goal-category=streaks&delete-goal=<?php echo $goal['streaks']['streak_id'] ?>">
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
                </li>
              <?php } else if(!isset($goal['total_amount']['no-goal'])) { ?>
                <li class="customize-goals-list-item" style="background-color: <?php echo $goal['total_amount']['habit_colour'] ?>; border: .2rem solid <?php echo $goal['total_amount']['habit_colour'] ?>;">
                  <div class="customize-goals-list-item-wrap">
                    <span class="customize-goals-list-item-icon">
                      <svg width="30px" height="30px" viewbox="0 0 180 180">
                        <g fill="#ffffff" stroke="none" stroke-width="1" fill-rule="evenodd">
                          <?php echo $goal['total_amount']['habit_icon'] ?>
                        </g>
                      </svg>
                    </span>
                    <span><?php echo $goal['total_amount']['habit_name'] ?>, <?php echo $goal['total_amount']['days_amount'] ?> days in <?php echo $goal['total_amount']['month'] ?></span>
                  </div>
                  <a href="index.php?page=profile&category=customize&goal-category=total-amount&delete-goal=<?php echo $goal['total_amount']['total_amount_id'] ?>">
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
                </li>
              <?php }
              if(isset($goal['repetitive']['no-goal']) && isset($goal['streaks']['no-goal']) && isset($goal['total_amount']['no-goal'])) { ?>
                <li class="customize-goals-list-item" style="border: .2rem solid <?php echo $goal['repetitive']['habit_colour'] ?>; color: <?php echo $goal['repetitive']['habit_colour'] ?>;">
                  <a href="index.php?page=profile&category=customize&add-goal=<?php echo $goal['repetitive']['habit_name'] ?>">
                    <svg width="14px" height="14px" viewBox="0 0 14 14">
                      <title>Add habit link</title>
                      <desc>Icon for add habit.</desc>
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g transform="translate(-321.000000, -710.000000)" stroke="<?php echo $goal['repetitive']['habit_colour'] ?>" stroke-linecap="round" stroke-width="2.17756">
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
                    <span>add goal for <?php echo $goal['repetitive']['habit_name'] ?></span>
                  </a>
                </li>
              <?php }
            };
            endforeach; ?>
            </ul>
          <?php } else { ?>
            <p>You need to add habits in order to add goals.</p>
          <?php } ?>
      </article>
    </section>
  <?php endif; ?>

  <?php if ($currentStep === 'add-habit-1'): ?>
    <section class="main-profile-add-habit" id="main">
      <h2 class="main-profile-add-habit-title">add habit</h2>
      <p class="main-profile-add-habit-subtitle">choose or write down a new habit</p>
      <a href="index.php?page=profile&category=customize" class="main-profile-add-habit-back">
        <svg width="20px" height="23px" viewBox="0 0 30 23">
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
          <?php switch ($_SESSION['user']['lifegoal']) {
              case 'document-life': ?>
                <input type="radio" class="add-habit-form-radio" id="24" class="add-habit-form-input" name="chosen_habit" value="24" />
                <label for="24" class="add-habit-form-label">
                  <span>read something</span>
                </label>
                <?php break;
              case 'feel-happier': ?>
                <input type="radio" class="add-habit-form-radio" id="6" class="add-habit-form-input" name="chosen_habit" value="6" />
                <label for="6" class="add-habit-form-label">
                  <span>no social media</span>
                </label>
                <?php break;
              case 'reduce-stress': ?>
                <input type="radio" class="add-habit-form-radio" id="4" class="add-habit-form-input" name="chosen_habit" value="4" />
                <label for="4" class="add-habit-form-label">
                  <span>meditate</span>
                </label>
                <?php break;
              case 'live-healthier': ?>
                <input type="radio" class="add-habit-form-radio" id="9" class="add-habit-form-input" name="chosen_habit" value="9" />
                <label for="9" class="add-habit-form-label">
                  <span>go for a run</span>
                </label>
                <?php break;
              case 'reach-life-goals': ?>
                <input type="radio" class="add-habit-form-radio" id="2" class="add-habit-form-input" name="chosen_habit" value="2" />
                <label for="2" class="add-habit-form-label">
                  <span>do something new</span>
                </label>
                <?php break;
              case 'none-of-the-above': ?>
                <p class="error">No recommendations</p>
                <?php break;
              default: ?>
                <p class="error">No recommendations</p>
              <?php break;
            } ?>
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
        <svg width="20px" height="23px" viewBox="0 0 30 23">
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
              <input type="radio" class="add-habit-form-icon-radio" id="<?php echo $icon['data_habit_icon_id'] ?>" name="chosen_habit_icon" value="<?php echo $icon['data_habit_icon_id'] ?>" class="form-input" />
              <label for="<?php echo $icon['data_habit_icon_id'] ?>" class="add-habit-form-icon-label add-habit-form-label-<?php echo $_GET['add-habit'] ?>">
                <span class="form-label">
                  <svg class="add-habit-icon-svg" width="60px" height="60px" viewbox="0 0 180 180">
                    <g fill="<?php echo $iconColour ?>" stroke="none" stroke-width="1" fill-rule="evenodd">
                      <?php echo $icon['habit_icon'] ?>
                    </g>
                  </svg>
                </span>
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
        <svg width="20px" height="23px" viewBox="0 0 30 23">
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
            <svg width="160px" height="128px" viewBox="0 0 160 128">
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-315.000000, -362.000000)">
                  <g transform="translate(315.000000, 362.000000)">
                    <g transform="translate(0.000000, 9.979000)" stroke="#2b2b2b">
                      <path d="M145.7084,0.565 L13.8504,0.565 C6.4774,0.565 0.5004,6.542 0.5004,13.916 C0.5004,21.289 6.4774,27.265 13.8504,27.265 L145.7084,27.265"></path>
                    </g>
                    <g transform="translate(13.000000, 36.979000)" stroke="#2b2b2b">
                      <path d="M0.85,27.0103 L132.708,27.0103 C140.081,27.0103 146.059,21.0323 146.059,13.6593 C146.059,6.2863 140.081,0.3093 132.708,0.3093 L0.85,0.3093"></path>
                    </g>
                    <g transform="translate(0.000000, 63.979000)" stroke="#2b2b2b">
                      <path d="M145.7084,0.0543 L13.8504,0.0543 C6.4774,0.0543 0.5004,6.0323 0.5004,13.4053 C0.5004,20.7783 6.4774,26.7553 13.8504,26.7553 L145.7084,26.7553"></path>
                    </g>
                    <g transform="translate(13.000000, 89.979000)" stroke="#2b2b2b">
                      <path d="M0.85,27.4996 L132.708,27.4996 C140.081,27.4996 146.059,21.5226 146.059,14.1496 C146.059,6.7756 140.081,0.7996 132.708,0.7996 L0.85,0.7996"></path>
                    </g>
                    <path d="M17.3149,127.4786 C11.7929,127.4786 7.3149,123.0016 7.3149,117.4786 C7.3149,111.9566 11.7929,107.4786 17.3149,107.4786 C22.8379,107.4786 27.3149,111.9566 27.3149,117.4786 C27.3149,123.0016 22.8379,127.4786 17.3149,127.4786" fill="#ffffff"></path>
                    <path d="M17.3149,127.4786 C11.7929,127.4786 7.3149,123.0016 7.3149,117.4786 C7.3149,111.9566 11.7929,107.4786 17.3149,107.4786 C22.8379,107.4786 27.3149,111.9566 27.3149,117.4786 C27.3149,123.0016 22.8379,127.4786 17.3149,127.4786 Z" stroke="#2b2b2b"></path>
                    <path d="M64.2729,127.4786 C58.7499,127.4786 54.2729,123.0016 54.2729,117.4786 C54.2729,111.9566 58.7499,107.4786 64.2729,107.4786 C69.7949,107.4786 74.2729,111.9566 74.2729,117.4786 C74.2729,123.0016 69.7949,127.4786 64.2729,127.4786" fill="#ffffff"></path>
                    <path d="M64.2729,127.4786 C58.7499,127.4786 54.2729,123.0016 54.2729,117.4786 C54.2729,111.9566 58.7499,107.4786 64.2729,107.4786 C69.7949,107.4786 74.2729,111.9566 74.2729,117.4786 C74.2729,123.0016 69.7949,127.4786 64.2729,127.4786 Z" stroke="#2b2b2b"></path>
                    <path d="M110.7905,127.4786 C105.2675,127.4786 100.7905,123.0016 100.7905,117.4786 C100.7905,111.9566 105.2675,107.4786 110.7905,107.4786 C116.3125,107.4786 120.7905,111.9566 120.7905,117.4786 C120.7905,123.0016 116.3125,127.4786 110.7905,127.4786" fill="#00d28b"></path>
                    <path d="M110.7905,127.4786 C105.2675,127.4786 100.7905,123.0016 100.7905,117.4786 C100.7905,111.9566 105.2675,107.4786 110.7905,107.4786 C116.3125,107.4786 120.7905,111.9566 120.7905,117.4786 C120.7905,123.0016 116.3125,127.4786 110.7905,127.4786 Z" stroke="#2b2b2b"></path>
                    <path d="M39.7172,100.7344 C34.1952,100.7344 29.7172,96.2564 29.7172,90.7344 C29.7172,85.2114 34.1952,80.7344 39.7172,80.7344 C45.2392,80.7344 49.7172,85.2114 49.7172,90.7344 C49.7172,96.2564 45.2392,100.7344 39.7172,100.7344" fill="#00d28b"></path>
                    <path d="M39.7172,100.7344 C34.1952,100.7344 29.7172,96.2564 29.7172,90.7344 C29.7172,85.2114 34.1952,80.7344 39.7172,80.7344 C45.2392,80.7344 49.7172,85.2114 49.7172,90.7344 C49.7172,96.2564 45.2392,100.7344 39.7172,100.7344 Z" stroke="#2b2b2b"></path>
                    <path d="M86.6742,100.7344 C81.1522,100.7344 76.6742,96.2564 76.6742,90.7344 C76.6742,85.2114 81.1522,80.7344 86.6742,80.7344 C92.1972,80.7344 96.6742,85.2114 96.6742,90.7344 C96.6742,96.2564 92.1972,100.7344 86.6742,100.7344" fill="#ffffff"></path>
                    <path d="M86.6742,100.7344 C81.1522,100.7344 76.6742,96.2564 76.6742,90.7344 C76.6742,85.2114 81.1522,80.7344 86.6742,80.7344 C92.1972,80.7344 96.6742,85.2114 96.6742,90.7344 C96.6742,96.2564 92.1972,100.7344 86.6742,100.7344 Z" stroke="#2b2b2b"></path>
                    <path d="M133.1918,100.7344 C127.6698,100.7344 123.1918,96.2564 123.1918,90.7344 C123.1918,85.2114 127.6698,80.7344 133.1918,80.7344 C138.7148,80.7344 143.1918,85.2114 143.1918,90.7344 C143.1918,96.2564 138.7148,100.7344 133.1918,100.7344" fill="#ffffff"></path>
                    <path d="M133.1918,100.7344 C127.6698,100.7344 123.1918,96.2564 123.1918,90.7344 C123.1918,85.2114 127.6698,80.7344 133.1918,80.7344 C138.7148,80.7344 143.1918,85.2114 143.1918,90.7344 C143.1918,96.2564 138.7148,100.7344 133.1918,100.7344 Z" stroke="#2b2b2b"></path>
                    <path d="M17.5346,73.9893 C12.0126,73.9893 7.5346,69.5123 7.5346,63.9893 C7.5346,58.4673 12.0126,53.9893 17.5346,53.9893 C23.0576,53.9893 27.5346,58.4673 27.5346,63.9893 C27.5346,69.5123 23.0576,73.9893 17.5346,73.9893" fill="#ffffff"></path>
                    <path d="M17.5346,73.9893 C12.0126,73.9893 7.5346,69.5123 7.5346,63.9893 C7.5346,58.4673 12.0126,53.9893 17.5346,53.9893 C23.0576,53.9893 27.5346,58.4673 27.5346,63.9893 C27.5346,69.5123 23.0576,73.9893 17.5346,73.9893 Z" stroke="#2b2b2b"></path>
                    <path d="M64.4926,73.9893 C58.9696,73.9893 54.4926,69.5123 54.4926,63.9893 C54.4926,58.4673 58.9696,53.9893 64.4926,53.9893 C70.0146,53.9893 74.4926,58.4673 74.4926,63.9893 C74.4926,69.5123 70.0146,73.9893 64.4926,73.9893" fill="#ffffff"></path>
                    <path d="M64.4926,73.9893 C58.9696,73.9893 54.4926,69.5123 54.4926,63.9893 C54.4926,58.4673 58.9696,53.9893 64.4926,53.9893 C70.0146,53.9893 74.4926,58.4673 74.4926,63.9893 C74.4926,69.5123 70.0146,73.9893 64.4926,73.9893 Z" stroke="#2b2b2b"></path>
                    <path d="M111.0102,73.9893 C105.4872,73.9893 101.0102,69.5123 101.0102,63.9893 C101.0102,58.4673 105.4872,53.9893 111.0102,53.9893 C116.5322,53.9893 121.0102,58.4673 121.0102,63.9893 C121.0102,69.5123 116.5322,73.9893 111.0102,73.9893" fill="#00d28b"></path>
                    <path d="M111.0102,73.9893 C105.4872,73.9893 101.0102,69.5123 101.0102,63.9893 C101.0102,58.4673 105.4872,53.9893 111.0102,53.9893 C116.5322,53.9893 121.0102,58.4673 121.0102,63.9893 C121.0102,69.5123 116.5322,73.9893 111.0102,73.9893 Z" stroke="#2b2b2b"></path>
                    <path d="M39.9369,46.7012 C34.4149,46.7012 29.9369,42.2242 29.9369,36.7012 C29.9369,31.1792 34.4149,26.7012 39.9369,26.7012 C45.4589,26.7012 49.9369,31.1792 49.9369,36.7012 C49.9369,42.2242 45.4589,46.7012 39.9369,46.7012" fill="#00d28b"></path>
                    <path d="M39.9369,46.7012 C34.4149,46.7012 29.9369,42.2242 29.9369,36.7012 C29.9369,31.1792 34.4149,26.7012 39.9369,26.7012 C45.4589,26.7012 49.9369,31.1792 49.9369,36.7012 C49.9369,42.2242 45.4589,46.7012 39.9369,46.7012 Z" stroke="#2b2b2b"></path>
                    <path d="M86.894,46.7012 C81.372,46.7012 76.894,42.2242 76.894,36.7012 C76.894,31.1792 81.372,26.7012 86.894,26.7012 C92.417,26.7012 96.894,31.1792 96.894,36.7012 C96.894,42.2242 92.417,46.7012 86.894,46.7012" fill="#ffffff"></path>
                    <path d="M86.894,46.7012 C81.372,46.7012 76.894,42.2242 76.894,36.7012 C76.894,31.1792 81.372,26.7012 86.894,26.7012 C92.417,26.7012 96.894,31.1792 96.894,36.7012 C96.894,42.2242 92.417,46.7012 86.894,46.7012 Z" stroke="#2b2b2b"></path>
                    <path d="M133.4125,46.7012 L133.4115,46.7012 C127.8895,46.7012 123.4115,42.2242 123.4115,36.7012 C123.4115,31.1792 127.8895,26.7012 133.4115,26.7012 L133.4125,26.7012 C138.9345,26.7012 143.4115,31.1792 143.4115,36.7012 C143.4115,42.2242 138.9345,46.7012 133.4125,46.7012" fill="#ffffff"></path>
                    <path d="M133.4125,46.7012 L133.4115,46.7012 C127.8895,46.7012 123.4115,42.2242 123.4115,36.7012 C123.4115,31.1792 127.8895,26.7012 133.4115,26.7012 L133.4125,26.7012 C138.9345,26.7012 143.4115,31.1792 143.4115,36.7012 C143.4115,42.2242 138.9345,46.7012 133.4125,46.7012 Z" stroke="#2b2b2b"></path>
                    <path d="M17.5346,20.5001 C12.0126,20.5001 7.5346,16.0221 7.5346,10.5001 C7.5346,4.9781 12.0126,0.5001 17.5346,0.5001 C23.0576,0.5001 27.5346,4.9781 27.5346,10.5001 C27.5346,16.0221 23.0576,20.5001 17.5346,20.5001" fill="#ffffff"></path>
                    <path d="M17.5346,20.5001 C12.0126,20.5001 7.5346,16.0221 7.5346,10.5001 C7.5346,4.9781 12.0126,0.5001 17.5346,0.5001 C23.0576,0.5001 27.5346,4.9781 27.5346,10.5001 C27.5346,16.0221 23.0576,20.5001 17.5346,20.5001 Z" stroke="#2b2b2b"></path>
                    <path d="M64.4926,20.5001 C58.9696,20.5001 54.4926,16.0221 54.4926,10.5001 C54.4926,4.9781 58.9696,0.5001 64.4926,0.5001 C70.0146,0.5001 74.4926,4.9781 74.4926,10.5001 C74.4926,16.0221 70.0146,20.5001 64.4926,20.5001" fill="#ffffff"></path>
                    <path d="M64.4926,20.5001 C58.9696,20.5001 54.4926,16.0221 54.4926,10.5001 C54.4926,4.9781 58.9696,0.5001 64.4926,0.5001 C70.0146,0.5001 74.4926,4.9781 74.4926,10.5001 C74.4926,16.0221 70.0146,20.5001 64.4926,20.5001 Z" stroke="#2b2b2b"></path>
                    <path d="M111.0102,20.5001 C105.4872,20.5001 101.0102,16.0221 101.0102,10.5001 C101.0102,4.9781 105.4872,0.5001 111.0102,0.5001 C116.5322,0.5001 121.0102,4.9781 121.0102,10.5001 C121.0102,16.0221 116.5322,20.5001 111.0102,20.5001" fill="#00d28b"></path>
                    <path d="M111.0102,20.5001 C105.4872,20.5001 101.0102,16.0221 101.0102,10.5001 C101.0102,4.9781 105.4872,0.5001 111.0102,0.5001 C116.5322,0.5001 121.0102,4.9781 121.0102,10.5001 C121.0102,16.0221 116.5322,20.5001 111.0102,20.5001 Z" stroke="#2b2b2b"></path>
                  </g>
                </g>
              </g>
            </svg>
            <p class="add-goal-type-title">Repetitive</p>
            <p class="add-goal-type-subtitle">e.g. <span class="add-goal-type-subtitle-habitname" style="color: <?php echo $habit_colour ?>"><?php echo $habit ?></span>, every monday of january.</p>
          </a>
        </li>
        <li class="add-goal-type">
          <a href="index.php?page=profile&category=customize&add-goal=<?php echo $habit ?>&goal-type=streak">
            <svg width="161px" height="128px" viewBox="0 0 161 128">
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-639.000000, -362.000000)">
                  <g transform="translate(640.000000, 362.000000)">
                    <g transform="translate(0.000000, 9.979000)" stroke="#2b2b2b">
                      <path d="M145.7088,0.565 L13.8508,0.565 C6.4778,0.565 0.4998,6.542 0.4998,13.916 C0.4998,21.289 6.4778,27.265 13.8508,27.265 L145.7088,27.265"></path>
                    </g>
                    <g transform="translate(13.000000, 36.979000)" stroke="#2b2b2b">
                      <path d="M0.8504,27.0103 L132.3584,27.0103 C139.2104,27.0103 145.2234,21.9893 145.9754,15.1783 C146.8644,7.1253 140.5814,0.3093 132.7084,0.3093 L0.8504,0.3093"></path>
                    </g>
                    <g transform="translate(0.000000, 63.979000)" stroke="#2b2b2b">
                      <path d="M145.7088,0.0543 L13.8508,0.0543 C6.4778,0.0543 0.4998,6.0323 0.4998,13.4053 C0.4998,20.7783 6.4778,26.7553 13.8508,26.7553 L145.7088,26.7553"></path>
                    </g>
                    <g transform="translate(13.000000, 89.979000)" stroke="#2b2b2b">
                      <path d="M0.8504,27.4996 L132.7084,27.4996 C140.0814,27.4996 146.0594,21.5226 146.0594,14.1496 C146.0594,6.7756 140.0814,0.7996 132.7084,0.7996 L0.8504,0.7996"></path>
                    </g>
                    <path d="M17.3152,127.4786 C11.7922,127.4786 7.3152,123.0016 7.3152,117.4786 C7.3152,111.9566 11.7922,107.4786 17.3152,107.4786 C22.8372,107.4786 27.3152,111.9566 27.3152,117.4786 C27.3152,123.0016 22.8372,127.4786 17.3152,127.4786" fill="#ffffff"></path>
                    <path d="M17.3152,127.4786 C11.7922,127.4786 7.3152,123.0016 7.3152,117.4786 C7.3152,111.9566 11.7922,107.4786 17.3152,107.4786 C22.8372,107.4786 27.3152,111.9566 27.3152,117.4786 C27.3152,123.0016 22.8372,127.4786 17.3152,127.4786 Z" stroke="#2b2b2b"></path>
                    <path d="M64.2722,127.4786 C58.7502,127.4786 54.2722,123.0016 54.2722,117.4786 C54.2722,111.9566 58.7502,107.4786 64.2722,107.4786 C69.7952,107.4786 74.2722,111.9566 74.2722,117.4786 C74.2722,123.0016 69.7952,127.4786 64.2722,127.4786" fill="#ffffff"></path>
                    <path d="M64.2722,127.4786 C58.7502,127.4786 54.2722,123.0016 54.2722,117.4786 C54.2722,111.9566 58.7502,107.4786 64.2722,107.4786 C69.7952,107.4786 74.2722,111.9566 74.2722,117.4786 C74.2722,123.0016 69.7952,127.4786 64.2722,127.4786 Z" stroke="#2b2b2b"></path>
                    <path d="M110.7898,127.4786 C105.2678,127.4786 100.7898,123.0016 100.7898,117.4786 C100.7898,111.9566 105.2678,107.4786 110.7898,107.4786 C116.3128,107.4786 120.7898,111.9566 120.7898,117.4786 C120.7898,123.0016 116.3128,127.4786 110.7898,127.4786" fill="#ffffff"></path>
                    <path d="M110.7898,127.4786 C105.2678,127.4786 100.7898,123.0016 100.7898,117.4786 C100.7898,111.9566 105.2678,107.4786 110.7898,107.4786 C116.3128,107.4786 120.7898,111.9566 120.7898,117.4786 C120.7898,123.0016 116.3128,127.4786 110.7898,127.4786 Z" stroke="#2b2b2b"></path>
                    <path d="M39.7176,100.7344 C34.1946,100.7344 29.7176,96.2564 29.7176,90.7344 C29.7176,85.2114 34.1946,80.7344 39.7176,80.7344 C45.2396,80.7344 49.7176,85.2114 49.7176,90.7344 C49.7176,96.2564 45.2396,100.7344 39.7176,100.7344" fill="#9278FD"></path>
                    <path d="M39.7176,100.7344 C34.1946,100.7344 29.7176,96.2564 29.7176,90.7344 C29.7176,85.2114 34.1946,80.7344 39.7176,80.7344 C45.2396,80.7344 49.7176,85.2114 49.7176,90.7344 C49.7176,96.2564 45.2396,100.7344 39.7176,100.7344 Z" stroke="#393939"></path>
                    <path d="M86.6746,100.7344 C81.1526,100.7344 76.6746,96.2564 76.6746,90.7344 C76.6746,85.2114 81.1526,80.7344 86.6746,80.7344 C92.1966,80.7344 96.6746,85.2114 96.6746,90.7344 C96.6746,96.2564 92.1966,100.7344 86.6746,100.7344" fill="#ffffff"></path>
                    <path d="M86.6746,100.7344 C81.1526,100.7344 76.6746,96.2564 76.6746,90.7344 C76.6746,85.2114 81.1526,80.7344 86.6746,80.7344 C92.1966,80.7344 96.6746,85.2114 96.6746,90.7344 C96.6746,96.2564 92.1966,100.7344 86.6746,100.7344 Z" stroke="#2b2b2b"></path>
                    <path d="M133.1922,100.7344 C127.6702,100.7344 123.1922,96.2564 123.1922,90.7344 C123.1922,85.2114 127.6702,80.7344 133.1922,80.7344 C138.7142,80.7344 143.1922,85.2114 143.1922,90.7344 C143.1922,96.2564 138.7142,100.7344 133.1922,100.7344" fill="#ffffff"></path>
                    <path d="M133.1922,100.7344 C127.6702,100.7344 123.1922,96.2564 123.1922,90.7344 C123.1922,85.2114 127.6702,80.7344 133.1922,80.7344 C138.7142,80.7344 143.1922,85.2114 143.1922,90.7344 C143.1922,96.2564 138.7142,100.7344 133.1922,100.7344 Z" stroke="#2b2b2b"></path>
                    <path d="M17.5349,73.9893 C12.0129,73.9893 7.5349,69.5123 7.5349,63.9893 C7.5349,58.4673 12.0129,53.9893 17.5349,53.9893 C23.0569,53.9893 27.5349,58.4673 27.5349,63.9893 C27.5349,69.5123 23.0569,73.9893 17.5349,73.9893" fill="#9278FD"></path>
                    <path d="M17.5349,73.9893 C12.0129,73.9893 7.5349,69.5123 7.5349,63.9893 C7.5349,58.4673 12.0129,53.9893 17.5349,53.9893 C23.0569,53.9893 27.5349,58.4673 27.5349,63.9893 C27.5349,69.5123 23.0569,73.9893 17.5349,73.9893 Z" stroke="#393939"></path>
                    <path d="M64.492,73.9893 C58.97,73.9893 54.492,69.5123 54.492,63.9893 C54.492,58.4673 58.97,53.9893 64.492,53.9893 C70.015,53.9893 74.492,58.4673 74.492,63.9893 C74.492,69.5123 70.015,73.9893 64.492,73.9893" fill="#9278FD"></path>
                    <path d="M64.492,73.9893 C58.97,73.9893 54.492,69.5123 54.492,63.9893 C54.492,58.4673 58.97,53.9893 64.492,53.9893 C70.015,53.9893 74.492,58.4673 74.492,63.9893 C74.492,69.5123 70.015,73.9893 64.492,73.9893 Z" stroke="#393939"></path>
                    <path d="M111.0096,73.9893 C105.4876,73.9893 101.0096,69.5123 101.0096,63.9893 C101.0096,58.4673 105.4876,53.9893 111.0096,53.9893 C116.5326,53.9893 121.0096,58.4673 121.0096,63.9893 C121.0096,69.5123 116.5326,73.9893 111.0096,73.9893" fill="#9278FD"></path>
                    <path d="M111.0096,73.9893 C105.4876,73.9893 101.0096,69.5123 101.0096,63.9893 C101.0096,58.4673 105.4876,53.9893 111.0096,53.9893 C116.5326,53.9893 121.0096,58.4673 121.0096,63.9893 C121.0096,69.5123 116.5326,73.9893 111.0096,73.9893 Z" stroke="#393939"></path>
                    <path d="M39.9373,46.7012 C34.4143,46.7012 29.9373,42.2242 29.9373,36.7012 C29.9373,31.1792 34.4143,26.7012 39.9373,26.7012 C45.4593,26.7012 49.9373,31.1792 49.9373,36.7012 C49.9373,42.2242 45.4593,46.7012 39.9373,46.7012" fill="#ffffff"></path>
                    <path d="M39.9373,46.7012 C34.4143,46.7012 29.9373,42.2242 29.9373,36.7012 C29.9373,31.1792 34.4143,26.7012 39.9373,26.7012 C45.4593,26.7012 49.9373,31.1792 49.9373,36.7012 C49.9373,42.2242 45.4593,46.7012 39.9373,46.7012 Z" stroke="#2b2b2b"></path>
                    <path d="M86.8943,46.7012 C81.3723,46.7012 76.8943,42.2242 76.8943,36.7012 C76.8943,31.1792 81.3723,26.7012 86.8943,26.7012 C92.4163,26.7012 96.8943,31.1792 96.8943,36.7012 C96.8943,42.2242 92.4163,46.7012 86.8943,46.7012" fill="#ffffff"></path>
                    <path d="M86.8943,46.7012 C81.3723,46.7012 76.8943,42.2242 76.8943,36.7012 C76.8943,31.1792 81.3723,26.7012 86.8943,26.7012 C92.4163,26.7012 96.8943,31.1792 96.8943,36.7012 C96.8943,42.2242 92.4163,46.7012 86.8943,46.7012 Z" stroke="#2b2b2b"></path>
                    <path d="M133.4119,46.7012 C127.8899,46.7012 123.4119,42.2242 123.4119,36.7012 C123.4119,31.1792 127.8899,26.7012 133.4119,26.7012 C138.9349,26.7012 143.4119,31.1792 143.4119,36.7012 C143.4119,42.2242 138.9349,46.7012 133.4119,46.7012" fill="#9278FD"></path>
                    <path d="M133.4119,46.7012 C127.8899,46.7012 123.4119,42.2242 123.4119,36.7012 C123.4119,31.1792 127.8899,26.7012 133.4119,26.7012 C138.9349,26.7012 143.4119,31.1792 143.4119,36.7012 C143.4119,42.2242 138.9349,46.7012 133.4119,46.7012 Z" stroke="#393939"></path>
                    <path d="M17.5349,20.5001 C12.0129,20.5001 7.5349,16.0221 7.5349,10.5001 C7.5349,4.9781 12.0129,0.5001 17.5349,0.5001 C23.0569,0.5001 27.5349,4.9781 27.5349,10.5001 C27.5349,16.0221 23.0569,20.5001 17.5349,20.5001" fill="#ffffff"></path>
                    <path d="M17.5349,20.5001 C12.0129,20.5001 7.5349,16.0221 7.5349,10.5001 C7.5349,4.9781 12.0129,0.5001 17.5349,0.5001 C23.0569,0.5001 27.5349,4.9781 27.5349,10.5001 C27.5349,16.0221 23.0569,20.5001 17.5349,20.5001 Z" stroke="#2b2b2b"></path>
                    <path d="M64.492,20.5001 C58.97,20.5001 54.492,16.0221 54.492,10.5001 C54.492,4.9781 58.97,0.5001 64.492,0.5001 C70.015,0.5001 74.492,4.9781 74.492,10.5001 C74.492,16.0221 70.015,20.5001 64.492,20.5001" fill="#ffffff"></path>
                    <path d="M64.492,20.5001 C58.97,20.5001 54.492,16.0221 54.492,10.5001 C54.492,4.9781 58.97,0.5001 64.492,0.5001 C70.015,0.5001 74.492,4.9781 74.492,10.5001 C74.492,16.0221 70.015,20.5001 64.492,20.5001 Z" stroke="#2b2b2b"></path>
                    <path d="M111.0096,20.5001 C105.4876,20.5001 101.0096,16.0221 101.0096,10.5001 C101.0096,4.9781 105.4876,0.5001 111.0096,0.5001 C116.5326,0.5001 121.0096,4.9781 121.0096,10.5001 C121.0096,16.0221 116.5326,20.5001 111.0096,20.5001" fill="#ffffff"></path>
                    <path d="M111.0096,20.5001 C105.4876,20.5001 101.0096,16.0221 101.0096,10.5001 C101.0096,4.9781 105.4876,0.5001 111.0096,0.5001 C116.5326,0.5001 121.0096,4.9781 121.0096,10.5001 C121.0096,16.0221 116.5326,20.5001 111.0096,20.5001 Z" stroke="#2b2b2b"></path>
                  </g>
                </g>
              </g>
            </svg>
            <p class="add-goal-type-title">Streak</p>
            <p class="add-goal-type-subtitle">e.g. <span class="add-goal-type-subtitle-habitname" style="color: <?php echo $habit_colour ?>"><?php echo $habit ?></span>, 10 days in a row.</p>
          </a>
        </li>
        <li class="add-goal-type">
          <a href="index.php?page=profile&category=customize&add-goal=<?php echo $habit ?>&goal-type=total">
            <svg width="160px" height="128px" viewBox="0 0 160 128">
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-965.000000, -362.000000)">
                  <g transform="translate(965.000000, 362.000000)">
                    <g transform="translate(0.000000, 9.979000)" stroke="#2b2b2b">
                      <path d="M145.7082,0.565 L13.8512,0.565 C6.4772,0.565 0.5002,6.542 0.5002,13.916 C0.5002,21.289 6.4772,27.265 13.8512,27.265 L145.7082,27.265"></path>
                    </g>
                    <g transform="translate(13.000000, 36.979000)" stroke="#2b2b2b">
                      <path d="M0.8507,27.0103 L132.3577,27.0103 C139.2107,27.0103 145.2237,21.9893 145.9747,15.1783 C146.8637,7.1253 140.5817,0.3093 132.7077,0.3093 L0.8507,0.3093"></path>
                    </g>
                    <g transform="translate(0.000000, 63.979000)" stroke="#2b2b2b">
                      <path d="M145.7082,0.0543 L13.8512,0.0543 C6.4772,0.0543 0.5002,6.0323 0.5002,13.4053 C0.5002,20.7783 6.4772,26.7553 13.8512,26.7553 L145.7082,26.7553"></path>
                    </g>
                    <g transform="translate(13.000000, 89.979000)" stroke="#2b2b2b">
                      <path d="M0.8507,27.4996 L132.7077,27.4996 C140.0817,27.4996 146.0587,21.5226 146.0587,14.1496 C146.0587,6.7756 140.0817,0.7996 132.7077,0.7996 L0.8507,0.7996"></path>
                    </g>
                    <path d="M17.3156,127.4786 C11.7926,127.4786 7.3156,123.0016 7.3156,117.4786 C7.3156,111.9566 11.7926,107.4786 17.3156,107.4786 C22.8376,107.4786 27.3156,111.9566 27.3156,117.4786 C27.3156,123.0016 22.8376,127.4786 17.3156,127.4786" fill="#4285ff"></path>
                    <path d="M17.3156,127.4786 C11.7926,127.4786 7.3156,123.0016 7.3156,117.4786 C7.3156,111.9566 11.7926,107.4786 17.3156,107.4786 C22.8376,107.4786 27.3156,111.9566 27.3156,117.4786 C27.3156,123.0016 22.8376,127.4786 17.3156,127.4786 Z" stroke="#2b2b2b"></path>
                    <path d="M64.2726,127.4786 C58.7496,127.4786 54.2726,123.0016 54.2726,117.4786 C54.2726,111.9566 58.7496,107.4786 64.2726,107.4786 C69.7946,107.4786 74.2726,111.9566 74.2726,117.4786 C74.2726,123.0016 69.7946,127.4786 64.2726,127.4786" fill="#ffffff"></path>
                    <path d="M64.2726,127.4786 C58.7496,127.4786 54.2726,123.0016 54.2726,117.4786 C54.2726,111.9566 58.7496,107.4786 64.2726,107.4786 C69.7946,107.4786 74.2726,111.9566 74.2726,117.4786 C74.2726,123.0016 69.7946,127.4786 64.2726,127.4786 Z" stroke="#2b2b2b"></path>
                    <path d="M110.7902,127.4786 C105.2682,127.4786 100.7902,123.0016 100.7902,117.4786 C100.7902,111.9566 105.2682,107.4786 110.7902,107.4786 C116.3122,107.4786 120.7902,111.9566 120.7902,117.4786 C120.7902,123.0016 116.3122,127.4786 110.7902,127.4786" fill="#ffffff"></path>
                    <path d="M110.7902,127.4786 C105.2682,127.4786 100.7902,123.0016 100.7902,117.4786 C100.7902,111.9566 105.2682,107.4786 110.7902,107.4786 C116.3122,107.4786 120.7902,111.9566 120.7902,117.4786 C120.7902,123.0016 116.3122,127.4786 110.7902,127.4786 Z" stroke="#2b2b2b"></path>
                    <path d="M39.7169,100.7344 C34.1949,100.7344 29.7169,96.2564 29.7169,90.7344 C29.7169,85.2114 34.1949,80.7344 39.7169,80.7344 C45.2399,80.7344 49.7169,85.2114 49.7169,90.7344 C49.7169,96.2564 45.2399,100.7344 39.7169,100.7344" fill="#ffffff"></path>
                    <path d="M39.7169,100.7344 C34.1949,100.7344 29.7169,96.2564 29.7169,90.7344 C29.7169,85.2114 34.1949,80.7344 39.7169,80.7344 C45.2399,80.7344 49.7169,85.2114 49.7169,90.7344 C49.7169,96.2564 45.2399,100.7344 39.7169,100.7344 Z" stroke="#2b2b2b"></path>
                    <path d="M86.675,100.7344 C81.152,100.7344 76.675,96.2564 76.675,90.7344 C76.675,85.2114 81.152,80.7344 86.675,80.7344 C92.197,80.7344 96.675,85.2114 96.675,90.7344 C96.675,96.2564 92.197,100.7344 86.675,100.7344" fill="#ffffff"></path>
                    <path d="M86.675,100.7344 C81.152,100.7344 76.675,96.2564 76.675,90.7344 C76.675,85.2114 81.152,80.7344 86.675,80.7344 C92.197,80.7344 96.675,85.2114 96.675,90.7344 C96.675,96.2564 92.197,100.7344 86.675,100.7344 Z" stroke="#2b2b2b"></path>
                    <path d="M133.1925,100.7344 C127.6695,100.7344 123.1925,96.2564 123.1925,90.7344 C123.1925,85.2114 127.6695,80.7344 133.1925,80.7344 C138.7145,80.7344 143.1925,85.2114 143.1925,90.7344 C143.1925,96.2564 138.7145,100.7344 133.1925,100.7344" fill="#ffffff"></path>
                    <path d="M133.1925,100.7344 C127.6695,100.7344 123.1925,96.2564 123.1925,90.7344 C123.1925,85.2114 127.6695,80.7344 133.1925,80.7344 C138.7145,80.7344 143.1925,85.2114 143.1925,90.7344 C143.1925,96.2564 138.7145,100.7344 133.1925,100.7344 Z" stroke="#2b2b2b"></path>
                    <path d="M17.5353,73.9893 C12.0123,73.9893 7.5353,69.5123 7.5353,63.9893 C7.5353,58.4673 12.0123,53.9893 17.5353,53.9893 C23.0573,53.9893 27.5353,58.4673 27.5353,63.9893 C27.5353,69.5123 23.0573,73.9893 17.5353,73.9893" fill="#4285ff"></path>
                    <path d="M17.5353,73.9893 C12.0123,73.9893 7.5353,69.5123 7.5353,63.9893 C7.5353,58.4673 12.0123,53.9893 17.5353,53.9893 C23.0573,53.9893 27.5353,58.4673 27.5353,63.9893 C27.5353,69.5123 23.0573,73.9893 17.5353,73.9893 Z" stroke="#2b2b2b"></path>
                    <path d="M64.4923,73.9893 C58.9693,73.9893 54.4923,69.5123 54.4923,63.9893 C54.4923,58.4673 58.9693,53.9893 64.4923,53.9893 C70.0143,53.9893 74.4923,58.4673 74.4923,63.9893 C74.4923,69.5123 70.0143,73.9893 64.4923,73.9893" fill="#4285ff"></path>
                    <path d="M64.4923,73.9893 C58.9693,73.9893 54.4923,69.5123 54.4923,63.9893 C54.4923,58.4673 58.9693,53.9893 64.4923,53.9893 C70.0143,53.9893 74.4923,58.4673 74.4923,63.9893 C74.4923,69.5123 70.0143,73.9893 64.4923,73.9893 Z" stroke="#2b2b2b"></path>
                    <path d="M111.0099,73.9893 C105.4879,73.9893 101.0099,69.5123 101.0099,63.9893 C101.0099,58.4673 105.4879,53.9893 111.0099,53.9893 C116.5319,53.9893 121.0099,58.4673 121.0099,63.9893 C121.0099,69.5123 116.5319,73.9893 111.0099,73.9893" fill="#ffffff"></path>
                    <path d="M111.0099,73.9893 C105.4879,73.9893 101.0099,69.5123 101.0099,63.9893 C101.0099,58.4673 105.4879,53.9893 111.0099,53.9893 C116.5319,53.9893 121.0099,58.4673 121.0099,63.9893 C121.0099,69.5123 116.5319,73.9893 111.0099,73.9893 Z" stroke="#2b2b2b"></path>
                    <path d="M39.9367,46.7012 C34.4147,46.7012 29.9367,42.2242 29.9367,36.7012 C29.9367,31.1792 34.4147,26.7012 39.9367,26.7012 C45.4597,26.7012 49.9367,31.1792 49.9367,36.7012 C49.9367,42.2242 45.4597,46.7012 39.9367,46.7012" fill="#ffffff"></path>
                    <path d="M39.9367,46.7012 C34.4147,46.7012 29.9367,42.2242 29.9367,36.7012 C29.9367,31.1792 34.4147,26.7012 39.9367,26.7012 C45.4597,26.7012 49.9367,31.1792 49.9367,36.7012 C49.9367,42.2242 45.4597,46.7012 39.9367,46.7012 Z" stroke="#2b2b2b"></path>
                    <path d="M86.8947,46.7012 C81.3717,46.7012 76.8947,42.2242 76.8947,36.7012 C76.8947,31.1792 81.3717,26.7012 86.8947,26.7012 C92.4167,26.7012 96.8947,31.1792 96.8947,36.7012 C96.8947,42.2242 92.4167,46.7012 86.8947,46.7012" fill="#ffffff"></path>
                    <path d="M86.8947,46.7012 C81.3717,46.7012 76.8947,42.2242 76.8947,36.7012 C76.8947,31.1792 81.3717,26.7012 86.8947,26.7012 C92.4167,26.7012 96.8947,31.1792 96.8947,36.7012 C96.8947,42.2242 92.4167,46.7012 86.8947,46.7012 Z" stroke="#2b2b2b"></path>
                    <path d="M133.4123,46.7012 C127.8893,46.7012 123.4123,42.2242 123.4123,36.7012 C123.4123,31.1792 127.8893,26.7012 133.4123,26.7012 C138.9343,26.7012 143.4123,31.1792 143.4123,36.7012 C143.4123,42.2242 138.9343,46.7012 133.4123,46.7012" fill="#4285ff"></path>
                    <path d="M133.4123,46.7012 C127.8893,46.7012 123.4123,42.2242 123.4123,36.7012 C123.4123,31.1792 127.8893,26.7012 133.4123,26.7012 C138.9343,26.7012 143.4123,31.1792 143.4123,36.7012 C143.4123,42.2242 138.9343,46.7012 133.4123,46.7012 Z" stroke="#2b2b2b"></path>
                    <path d="M17.5353,20.5001 C12.0123,20.5001 7.5353,16.0221 7.5353,10.5001 C7.5353,4.9781 12.0123,0.5001 17.5353,0.5001 C23.0573,0.5001 27.5353,4.9781 27.5353,10.5001 C27.5353,16.0221 23.0573,20.5001 17.5353,20.5001" fill="#ffffff"></path>
                    <path d="M17.5353,20.5001 C12.0123,20.5001 7.5353,16.0221 7.5353,10.5001 C7.5353,4.9781 12.0123,0.5001 17.5353,0.5001 C23.0573,0.5001 27.5353,4.9781 27.5353,10.5001 C27.5353,16.0221 23.0573,20.5001 17.5353,20.5001 Z" stroke="#2b2b2b"></path>
                    <path d="M64.4923,20.5001 C58.9693,20.5001 54.4923,16.0221 54.4923,10.5001 C54.4923,4.9781 58.9693,0.5001 64.4923,0.5001 C70.0143,0.5001 74.4923,4.9781 74.4923,10.5001 C74.4923,16.0221 70.0143,20.5001 64.4923,20.5001" fill="#4285ff"></path>
                    <path d="M64.4923,20.5001 C58.9693,20.5001 54.4923,16.0221 54.4923,10.5001 C54.4923,4.9781 58.9693,0.5001 64.4923,0.5001 C70.0143,0.5001 74.4923,4.9781 74.4923,10.5001 C74.4923,16.0221 70.0143,20.5001 64.4923,20.5001 Z" stroke="#2b2b2b"></path>
                    <path d="M111.0099,20.5001 C105.4879,20.5001 101.0099,16.0221 101.0099,10.5001 C101.0099,4.9781 105.4879,0.5001 111.0099,0.5001 C116.5319,0.5001 121.0099,4.9781 121.0099,10.5001 C121.0099,16.0221 116.5319,20.5001 111.0099,20.5001" fill="#ffffff"></path>
                    <path d="M111.0099,20.5001 C105.4879,20.5001 101.0099,16.0221 101.0099,10.5001 C101.0099,4.9781 105.4879,0.5001 111.0099,0.5001 C116.5319,0.5001 121.0099,4.9781 121.0099,10.5001 C121.0099,16.0221 116.5319,20.5001 111.0099,20.5001 Z" stroke="#2b2b2b"></path>
                  </g>
                </g>
              </g>
            </svg>
            <p class="add-goal-type-title">Total</p>
            <p class="add-goal-type-subtitle">e.g. <span class="add-goal-type-subtitle-habitname" style="color: <?php echo $habit_colour ?>"><?php echo $habit ?></span>, 20 days in january.</p>
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
        <svg width="20px" height="23px" viewBox="0 0 30 23">
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
      <p class="main-profile-add-goal-text"><span class="add-goals-example">example:</span> <span style="color: <?php echo $habit_colour ?>"><?php echo $habit ?></span>, every <span class="repetitive-day">monday</span> of <span class="repetitive-month">january</span></p>
      <form method="post" class="main-profile-add-goal-form add-goal-repetitive-form">
        <fieldset class="add-goal-form-field add-goal-form-field-day">
          <legend class="add-goal-form-field-legend">Choose your day.</legend>
          <?php if(!empty($errors['chosen_repetitive_goal_day'])) echo '<span class="error">' . $errors['chosen_repetitive_goal_day'] . '</span>';?>
          <div class="add-habit-form-field-all">
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
          </div>
        </fieldset>
        <fieldset class="add-goal-form-field add-goal-form-field-month">
          <legend class="add-goal-form-field-legend">Choose your month.</legend>
          <?php if(!empty($errors['chosen_repetitive_goal_month'])) echo '<span class="error">' . $errors['chosen_repetitive_goal_month'] . '</span>';?>
          <div class="add-habit-form-field-all">
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
          </div>
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
        <svg width="20px" height="23px" viewBox="0 0 30 23">
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
        <svg width="20px" height="23px" viewBox="0 0 30 23">
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
          <div class="add-habit-form-field-all">
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
          </div>
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

