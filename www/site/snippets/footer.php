    <footer class="footer">
    <?php
      $items = $pages->visible();
      if($items->count()):
      ?>
    <div class="menu container">
        <ul class="menu_list">
                <?php foreach($items as $item): ?>
                    <li class="menu_item"><a title="<?php echo $item->title()->html() ?>" class="<?php e($item->isOpen(), 'active ')?>" href="<?php echo $item->url() ?>"><?php echo $item->title()->html() ?></a></li>
                <?php endforeach ?>
        </ul>
    </div>
    <?php endif ?>
    </footer>
  <?php echo js('assets/builds/bundle.js') ?>
  </body>
</html>
