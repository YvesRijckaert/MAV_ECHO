<section>
  <header><h1 class="page-header form-title">Register</h1></header>
  <?php if ($currentStep === 1): ?>
  <form class="register-form" method="post">
    <label>
      <span class="form-label">Email:</span>
      <input class="info-form-input" type="email" name="email" class="form-input"<?php if(!empty($_POST['email'])) echo 'value="' . $_POST['email'] . '"';?> required />
      <?php if(!empty($errors['email'])) echo '<span class="error">' . $errors['email'] . '</span>';?>
    </label>
    <label>
      <span class="form-label">Password:</span>
      <input class="info-form-input" type="password" name="password" class="form-input"<?php if(!empty($_POST['password'])) echo 'value="' . $_POST['password'] . '"';?> required />
      <?php if(!empty($errors['password'])) echo '<span class="error">' . $errors['password'] . '</span>';?>
    </label>
    <label>
      <span class="form-label">Confirm Password:</span>
      <input class="info-form-input" type="password" name="confirm_password" class="form-input"<?php if(!empty($_POST['confirm_password'])) echo 'value="' . $_POST['confirm_password'] . '"';?> required />
      <?php if(!empty($errors['confirm_password'])) echo '<span class="error">' . $errors['confirm_password'] . '</span>';?>
    </label>
    <label class="info-form-submit submit input-container">
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
          <input type="submit" class="add-habit-form-submit-button" name="register1" value="next" />
    </label>
  </form>
  <?php endif; ?>

  <?php if($currentStep === 2): ?>
  <form class="register-form" method="post">
    <label>
      <span class="form-label">How do you want to be called?</span>
      <input type="text" name="nickname" class="info-form-input"<?php if(!empty($_POST['nickname'])) echo 'value="' . $_POST['nickname'] . '"';?> required />
      <?php if(!empty($errors['nickname'])) echo '<span class="error">' . $errors['nickname'] . '</span>';?>
    </label>
    <label>
      <span class="form-label">When is your birthday?</span>
      <input type="date" name="birthdate" class="info-form-input"<?php if(!empty($_POST['birthdate'])) echo 'value="' . $_POST['birthdate'] . '"';?> required />
      <?php if(!empty($errors['birthdate'])) echo '<span class="error">' . $errors['birthdate'] . '</span>';?>
    </label>
    <label class="info-form-submit submit input-container">
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
          <input type="submit" class="add-habit-form-submit-button" name="register2" value="next" />
    </label>
  </form>
  <?php endif; ?>

  <?php if($currentStep === 3): ?>
  <p class="register-subtitle">what do you want to achieve?</p>
  <form class="register-form overal-goals" method="post">
    <input class="register-goal-radio" type="radio" name="lifegoal" id="document-life" value="document-life" required />
    <label for="document-life" class="info-form-goals-option">
      <span>document life</span>
    </label>
    <input class="register-goal-radio" type="radio" name="lifegoal" id="feel-happier" value="feel-happier" required />
    <label for="feel-happier" class="info-form-goals-option">
      <span>feel happier</span>
    </label>
    <input class="register-goal-radio" type="radio" name="lifegoal" id="reduce-stress" value="reduce-stress" required />
    <label for="reduce-stress" class="info-form-goals-option">
      <span>reduce stress</span>
    </label>
    <input class="register-goal-radio" type="radio" name="lifegoal" id="live-healthier" value="live-healthier" required />
    <label for="live-healthier" class="info-form-goals-option">
      <span>live healthier</span>
    </label>
    <input class="register-goal-radio" type="radio" name="lifegoal" id="reach-life-goals" value="reach-life-goals" required />
    <label for="reach-life-goals" class="info-form-goals-option">
      <span>reach life goals</span>
    </label>
    <input class="register-goal-radio" type="radio" name="lifegoal" id="none-of-the-above" value="none-of-the-above" required />
    <label for="none-of-the-above" class="info-form-goals-option">
      <span>none of the above</span>
    </label>
    <?php if(!empty($errors['lifegoal'])) echo '<span class="error">' . $errors['lifegoal'] . '</span>';?>
    <label class="info-form-submit submit input-container">
        <input type="submit" name="register3" class="info-form-submit-button"  value="finish" />
        <svg width="22px" height="16px" viewBox="0 0 22 16">
            <title>Done button</title>
            <desc>Icon for done button.</desc>
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <g transform="translate(-1294.000000, -742.000000)" stroke="#ffffff" stroke-linecap="round" stroke-width="2.4">
                <polyline points="1296 750.267785 1301.81878 756 1314 744"></polyline>
              </g>
            </g>
          </svg>
        <span>Finish</span>
      </label>
  </form>
  <?php endif; ?>
</section>
