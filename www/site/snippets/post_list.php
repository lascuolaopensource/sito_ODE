<div class="post_list_wrapper">
    <div class="post_list_head">
        <h2>Tutti i posts</h2>
        <div class="post_list_filter">
            <a class="post_list_view_filter" data-view-style="box" href="#">box</a>
            <a class="post_list_view_filter" data-view-style="list" href="#">list</a>
        </div>
    </div>
    <div class="post_list">
        <?php
        foreach( $list as $item ){
            snippet('post_box', array(
                'titolo'=> $item->titolo(),
                'sottotitolo'=> $item->sottotitolo(),
                'autore'=> $item->autore(),
                'data'=> $item->data(),
                'url'=> $item->url(),
                'bg'=> $item->cover()->toFile()
            ));
        }
    ?>
    </div>
</div>