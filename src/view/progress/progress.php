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
  </section>
<?php endif; ?>
