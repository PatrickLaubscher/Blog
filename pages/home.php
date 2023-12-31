<div class="row">
    <div class="col-sm-8">
        <?php  foreach (App\Table\Article::getLast() as $post): ?>

        <h2><a href="<?= $post->url?>"><?= $post->title; ?></a></h2>

        <p><em><?= $post->categorie; ?></em></p>


        <p><?= $post->extrait; ?></p>

        <?php endforeach; ?>

    </div>

    <div class="col-sm-4">
        <ul>

            <li>
                <a href="../pages/p=home">All</a>
            </li>
            
            <?php foreach (\App\Table\Categorie::all() as $categories): ?>

                <li>
                    <a href="<?= $categories->url;?>"><?= $categories->title; ?></a>
                </li>

            <?php endforeach; ?>
        </ul>
    </div>
</div>
