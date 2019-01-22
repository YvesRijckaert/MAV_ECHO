<section class="progress-header">
  <ul class="progress-header-nav">
    <li class="progress-category1 <?php if($currentCategory === 'statistics') { echo 'progress-category-active';} ?>">
      <a href="index.php?page=progress&category=statistics" class="progress-category">Statistics</a>
    </li>
    <li class="progress-category2 <?php if($currentCategory === 'achievements') { echo 'progress-category-active';} ?>">
      <a href="index.php?page=progress&category=achievements" class="progress-category">Achievements</a>
    </li>
    <li class="progress-category3 <?php if($currentCategory === 'goals') { echo 'progress-category-active';} ?>">
      <a href="index.php?page=progress&category=goals" class="progress-category">Goals</a>
    </li>
    <li class="progress-indicator"></li>
  </ul>
</section>
