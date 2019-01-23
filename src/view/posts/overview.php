<a href="index.php?page=add">Add new day</a>
<?php foreach ($posts as $post): ?>
    <p><?php echo $post['short_memory'] . $post['date'];  ?></p>
<?php endforeach; ?>
