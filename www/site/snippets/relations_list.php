<div class=“content_list”>
<?php

   if(true){ ?>
       <div>
           <?php foreach( $list as $item ){
               $titolo = $item->title()->html();
               $location = $item->location();
               $cap = $item->cap()->html();
               $tel = $item->tel()->html();
               $email = $item->email()->html();
               $apertura = $item->apertura()->kirbytext();
               $note = $item->note()->kirbytext();
           ?>

               <div class=“content_list_item” id=“<?= $titolo ?>_item” >

                   <h1><?= $titolo ?></h1>
                   <p><?= $location ?></p>
                   <p><?= $cap ?></p>
                   <p><?= $tel ?></p>
                   <p><?= $email ?></p>
                   <p><?= $apertura ?></p>
                   <p><?= $note ?></p>

     

                   
               </div>
           <?php } ?>
       </div>
   <?php }
?>
</div>