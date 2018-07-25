<?php snippet('header') ?>

<h1 class="titolo"><?php echo $page->title()->html() ?></h1>
<p class="paragrafo"><?= $page->text()->html() ?></p>

<?php
    $posts = $page->children()->visible();
    ?>
    <div class="articles">
        <?php
            foreach( $posts as $post ) { 
                ?>
            <div class="article">
                    <div class="artilce_header">
                        <h1><?= $post->titolo() ?></h1>
                        <p><?= $post->autore() ?></p>
                    </div>
                    <div class="article_content">
                        <p><?= $post->testo()->markdown() ?></p>
                    </div>
            </div>
            <?php 
            }
        ?>
    </div>


<?php snippet('footer') ?>
