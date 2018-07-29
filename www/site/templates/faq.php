<?php snippet('header') ?>


<?php
   $titolo = $page->title();
   $descrizione = $page->text()->kirbytext();
?>

 <div class="flex_column_lauot container">
     <h1><?= $titolo ?></h1>
     <p><?= $descrizione ?></p>

     <div>
       <?php foreach( $page->faq()->yaml() as $item ): ?>
           <div class="" >

               <p><?= $item['domanda'] ?></p>
               <p><?= $item['risposta'] ?></p>
               
               
           </div>
       <?php endforeach; ?>

   </div>
   </div>

<?php snippet('footer') ?>
