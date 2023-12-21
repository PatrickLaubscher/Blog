<ul>
    <?php  foreach ($db->query('SELECT * FROM articles') as $post): ?>
  
        <h2><a href="index.php?p=post&id=<?= $post->title; ?>"><?= $post->title; ?></a></h2>


        <p><? $post->extrait; ?></p>

    <?php endforeach ?>

</ul>

