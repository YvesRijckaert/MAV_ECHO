<section>
  <header><h1 class="page-header">Register</h1></header>
  <?php if ($currentStep === 1): ?>
  <form class="register-form" method="post">
    <label>
      <span class="form-label">Email:</span>
      <input type="email" name="email" class="form-input"<?php if(!empty($_POST['email'])) echo 'value="' . $_POST['email'] . '"';?> required />
      <?php if(!empty($errors['email'])) echo '<span class="error">' . $errors['email'] . '</span>';?>
    </label>
    <label>
      <span class="form-label">Password:</span>
      <input type="password" name="password" class="form-input"<?php if(!empty($_POST['password'])) echo 'value="' . $_POST['password'] . '"';?> required />
      <?php if(!empty($errors['password'])) echo '<span class="error">' . $errors['password'] . '</span>';?>
    </label>
    <label>
      <span class="form-label">Confirm Password:</span>
      <input type="password" name="confirm_password" class="form-input"<?php if(!empty($_POST['confirm_password'])) echo 'value="' . $_POST['confirm_password'] . '"';?> required />
      <?php if(!empty($errors['confirm_password'])) echo '<span class="error">' . $errors['confirm_password'] . '</span>';?>
    </label>
    <input type="submit" name="register1" value="next step" class="form-submit" />
  </form>
  <?php endif; ?>

  <?php if($currentStep === 2): ?>
  <form class="register-form" method="post">
    <label>
      <span class="form-label">How do you want to be called?</span>
      <input type="text" name="nickname" class="form-input"<?php if(!empty($_POST['nickname'])) echo 'value="' . $_POST['nickname'] . '"';?> required />
      <?php if(!empty($errors['nickname'])) echo '<span class="error">' . $errors['nickname'] . '</span>';?>
    </label>
    <label>
      <span class="form-label">When is your birthday?</span>
      <input type="date" name="birthdate" class="form-input"<?php if(!empty($_POST['birthdate'])) echo 'value="' . $_POST['birthdate'] . '"';?> required />
      <?php if(!empty($errors['birthdate'])) echo '<span class="error">' . $errors['birthdate'] . '</span>';?>
    </label>
    <input type="submit" name="register2" value="next step" />
  </form>
  <?php endif; ?>

  <?php if($currentStep === 3): ?>
  <form class="register-form" method="post">
    <input type="radio" name="lifegoal" id="reduce-stress" value="reduce-stress" required />
    <label for="reduce-stress">
      <span>reduce stress</span>
    </label>
    <input type="radio" name="lifegoal" id="feel-happier" value="feel-happier" required />
    <label for="feel-happier">
      <span>feel happier</span>
    </label>
    <input type="radio" name="lifegoal" id="decrease-anxiety" value="decrease-anxiety" required />
    <label for="decrease-anxiety">
      <span>decrease anxiety</span>
    </label>
    <input type="radio" name="lifegoal" id="build-confidence" value="build-confidence" required />
    <label for="build-confidence">
      <span>build confidence</span>
    </label>
    <input type="radio" name="lifegoal" id="improve-social-skills" value="improve-social-skills" required />
    <label for="improve-social-skills">
      <span>improve social skills</span>
    </label>
    <input type="radio" name="lifegoal" id="live-healthier" value="live-healthier" required />
    <label for="live-healthier">
      <span>live healthier</span>
    </label>
    <input type="radio" name="lifegoal" id="think-positively" value="think-positively" required />
    <label for="think-positively">
      <span>think positively</span>
    </label>
    <?php if(!empty($errors['lifegoal'])) echo '<span class="error">' . $errors['lifegoal'] . '</span>';?>
    <input type="submit" name="register3" value="finish" />
  </form>
  <?php endif; ?>
</section>
