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
        <a href="index.php?page=progress&category=goals&goals-type=in-progress" class="progress-category">Goals</a>
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
    <a href="index.php?page=progress&category=goals&goals-type=in-progress" class="<?php if($goalsCategory === 'in-progress') { echo 'nav-item-active';} ?>">In progress</a>
    <a href="index.php?page=progress&category=goals&goals-type=completed" class="<?php if($goalsCategory === 'completed') { echo 'nav-item-active';} ?>">Completed</a>
    <a href="index.php?page=profile&category=customize">Edit</a>
  </section>
<?php endif; ?>
