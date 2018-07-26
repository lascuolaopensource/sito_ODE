<div class="post_list">
    <?php
        foreach( $list as $item ){
            snippet('post_box', array(
                'titolo'=> $item->titolo(),
                'sottotitolo'=> $item->sottotitolo(),
                'autore'=> $item->autore(),
                'data'=> $item->data()
            ));
        }
    ?>
</div>