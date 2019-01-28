<section class="progress-header">
  <nav>
    <ul class="progress-header-nav">
      <li class="nav-item <?php if($currentCategory === 'statistics') { echo 'nav-item-active';} ?>">
        <a href="index.php?page=progress&category=statistics" class="progress-category">Statistics</a>
      </li>
      <li class="nav-item <?php if($currentCategory === 'achievements') { echo 'nav-item-active';} ?>">
        <a href="index.php?page=progress&category=achievements" class="progress-category">Achievements</a>
      </li>
      <li class="nav-item <?php if($currentCategory === 'goals') { echo 'nav-item-active';} ?>">
        <a href="index.php?page=progress&category=goals" class="progress-category">Goals</a>
      </li>
      <li class="progress-indicator"></li>
    </ul>
  </nav>
</section>


<?php if ($currentCategory == 'statistics'): ?>
  <section>
  </section>
<?php endif; ?>

<?php if ($currentCategory == 'achievements'): ?>
  <section>
  </section>
<?php endif; ?>

<?php if ($currentCategory == 'goals'): ?>
  <section>
    <form method="get" class="calendar-habits-form">
      <label for="in-progress">
        <span class="form-label">in progress</span>
        <input type="radio" id="in-progress" name="goals-type" value="in-progress" />
      </label>
      <label for="completed">
        <span class="form-label">completed</span>
        <input type="radio" id="completed" name="goals-type" value="completed" />
      </label>
      <input type="hidden" name="page" value="progress" />
      <input type="hidden" name="category" value="goals" />
      <input type="submit" value="submit" />
    </form>
    <a href="index.php?page=profile&category=customize">Edit</a>
  </section>
<?php endif; ?>
