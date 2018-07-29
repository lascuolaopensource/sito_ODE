<?php snippet('header') ?>

<?php $soggetti = $page->children()->visible(); ?>
<nav class="nav_blog">
    <ul class="nav_blog_list container">
        <?php foreach($soggetti as $soggetto ):?>
            <li class="nav_blog_item" ><?= $soggetto->title(); ?></li>
        <?php endforeach; ?>
        <input type="text" name="search" id="search">
    </ul>
</nav>
<div class="container">

    <h1 class="titolo"><?php echo $page->title()->html() ?></h1>
    <p class="paragrafo"><?= $page->text()->html() ?></p>

<?php
    $posts = $page->children()->visible();
    ?>
    <div class="posts">
        <div class="main_posts">
            <div class="main_posts_left">
                <?php snippet('post_big',array( 'post'=> $posts->first() )); ?>
            </div>
            <div class="main_posts_right">
                <?php snippet('post_small',array( 'post'=> $posts->first() )); ?>
                <?php snippet('post_small',array( 'post'=> $posts->first() )); ?>
            </div>
        </div>
        <?php
            snippet('post_list',array('list'=>$posts));
        ?>
    </div>
</div>

<?php snippet('footer') ?>
