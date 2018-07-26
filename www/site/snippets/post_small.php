<a href="<?= $post->url(); ?>"  class="post_small has_bg">
    <?= $post->cover()->toFile() ?>
    <span><?= $post->titolo() ?></span>
    <span><?= $post->sottotitolo() ?></span>
    <span><?= $post->autore() ?></span>
    <span><?= $post->data() ?></span>
</a>