<section>
  <a href="index.php?page=profile&category=information">Information</a>
  <a href="index.php?page=profile&category=customize">Customize</a>
</section>

<?php if ($category == 'information') : ?>
  <section>
    <p>Information page</p>
    <form class="update-form" method="post">
      <label>
        <span class="form-label">Email address</span>
        <input type="email" name="email" class="form-input" value="<?php echo $_SESSION['user']['email'];?>" />
      </label>
      <label>
        <span class="form-label">Password</span>
        <input type="password" name="password" class="form-input" value="password" />
      </label>
      <label>
        <span class="form-label">Name</span>
        <input type="text" name="nickname" class="form-input" value="<?php echo $_SESSION['user']['nickname'];?>" />
      </label>
      <label>
        <span class="form-label">Birthdate</span>
        <input type="date" name="birthdate" class="form-input" value="<?php echo $_SESSION['user']['birthdate'];?>" />
      </label>
      <input type="submit" name="update" value="save" />
    </form>
  </section>
<?php endif; ?>

<?php if ($category == 'customize'): ?>
  <section>
    <p>Customize page</p>
  </section>
<?php endif; ?>

