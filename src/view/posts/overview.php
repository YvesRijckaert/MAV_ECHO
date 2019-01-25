<!-- DAY VIEW -->
<!-- show all the days -->
<!-- check if current selected day has an entry in the database -->
<!-- if yes: show the daily post for that day -->
<!-- if no: show static HTML: 'no entry for this day' -->

<!-- MONTH VIEW -->
<!-- show calendar -->
<!-- highlight current day in calendar -->
<!-- show all the habits as radio buttons  -->
<!-- highlight chosen habit in calendar if that habit exists for that daily post entry  -->

<!-- check if already made a day entry today -->
<!-- if yes: change day button -->
<!-- if no: add new day button -->
<?php if(empty($alreadyPostedToday)): ?>
  <a href="index.php?page=add">Add new day</a>
<?php else: ?>
  <a href="index.php?page=add">Change your day</a>
<?php endif; ?>
