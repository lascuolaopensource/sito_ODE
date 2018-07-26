<?php snippet('header') ?>

<nav class="nav_blog">
    <ul class="nav_blog_list container">
        <li class="nav_blog_item" >Soggetto</li>
        <li class="nav_blog_item" >Soggetto</li>
        <li class="nav_blog_item" >Soggetto</li>
        <li class="nav_blog_item" >Soggetto</li>
        <li class="nav_blog_item" >Soggetto</li>
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
