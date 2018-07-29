<div class="container">
<?php snippet('footer-texture') ?>
<footer class="footer">
   
    
    <?php
      $items = $pages->visible();
      if($items->count()):
      ?>
    <div class="links">
    <h2 class="titolino">
      Mappa del sito
    </h2>
    <?php foreach($items as $item): ?>
    <a title="<?php echo $item->title()->html() ?>"  href="<?php echo $item->url() ?>">→ <?php echo $item->title()->html() ?></a><br>
    <?php endforeach ?>
    </div>
    <?php endif ?>

    <div class="links">
    <h2 class="titolino">
      Call to action
    </h2>
    <?php foreach(page('home')->interazioni()->toStructure() as $item): ?>
    <a title="<?php echo $item->titolo()->html() ?>"  href="<?php echo $item->url() ?>">→ <?php echo $item->titolo()->html() ?></a><br>
    <?php endforeach ?>
    </div>

    <div class="informations">
    <h2 class="titolino">
      Contattaci
    </h2>
    <h3 class="ode">
    Laboratorio Urbano<br>
    Officina degli Esordi
    </h3>
    <p class="testo">
    <?= $site->footertext()->kirbytext() ?>
    </p>
    </div>
    </footer>
    <div class="logofooter">
        <?php snippet('logofooter'); ?>
    </div>
</div>
    <?php echo js('assets/builds/bundle.js') ?>

  </body>
</html>
