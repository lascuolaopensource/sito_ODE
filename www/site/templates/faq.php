<?php snippet('header') ?>




<div class="container">
<?php snippet('footer-texture-due'); ?>    
</div>

<section class="container cowo">
    <h1 class="testata">
        <?= $page->title() ?>
    </h1>
</section>

<div class="container padding faq">
<?php foreach($page->faq()->toStructure() as $faq): ?>
    <div class="domanda">
    <h2 class="question"><?= $faq->domanda() ?></h2>
        <p class="answer">
        <?= $faq->risposta()->text() ?>
        </p>
    </div>
<?php endforeach; ?>
</div>

<?php snippet('footer') ?>
