<div class="sogetti_list">
            <?php foreach( $list as $evento ){
                $titolo = $evento->title()->html();
                $luogo = $evento->luogo()->yaml();
                $soggetto = $evento->soggetto()->html();
                $categoria = $evento->categoria();
                $cover = $evento->cover()->html();
                $tags = $evento->tags()->html();
                $prezzo = $evento->prezzo()->html();
                $link = $evento->link()->url();
                $audience = $evento->audience()->yaml();
                //$image = $evento->image()->toFile();
                ?>
                    <div class="soggetto">
                        <ul class="ul-left">
                            <li>test</li>
                            <li>test</li>
                            <li>test</li>
                        </ul>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        </p>
                    </div>
            <?php } ?>
</div>