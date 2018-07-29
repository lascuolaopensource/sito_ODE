<?php snippet('header'); ?>
<div class="events_list">
<?php
    $bg = $page->cover()->toFile();    
    $titolo = $page->title()->html();
    $luogo = $page->luogo()->yaml();
    $soggetto = $page->soggetto()->html();
    $categoria = $page->categoria();
    $cover = $page->cover()->html();
    $tags = $page->tags()->html();
    $prezzo = $page->prezzo()->html();
    $link = $page->link()->url();
    $paypal = $page->paypal()->html();
    $form_id = $page->form_id()->html();
    $excel_key = $page->excel_key()->html();
    $durata = $page->durata()->html();
    $deadline = $page->deadline()->html();
    $nextdate = strtotime($page->nextdate());
    $appuntamenti = $page->appuntamenti()->toStructure();
    $ospiti = $page->ospiti()->html();
    $num_min = $page->num_min()->html();
    $num_max = $page->num_max()->html();
    $programma = $page->programma()->kirbytext();
    $audience = $page->audience()->yaml();
    //$image = $page->image()->toFile();
    ?>
    <div class="container">
        <div class="cover has_bg">
            <?= $bg ?>
            <div class="cover_content">
                <h2 class="data">
                    <?= date('d/m/Y', $nextdate) ?> 
                </h2>
                <h1 class="cover_title"><?= $titolo ?></h1>
                <hr>
                <div class="tagfilters">
                    <a href="/eventi/tag:workshop" class="tag">#<?php echo $categoria ?></a>
                </div>
            </div>
        </div>

            <div class="flex_sidebar_layout">
                <div class="content">
                    <p class="informations">Questa attività si svolge presso lo spazio <?= $page->luogo() ?> ed è curato da <?= $page->soggetto() ?>.</p>
                    <?php if($prezzo->isNotEmpty()): ?>
                    Questa attività dura <?= $durata ?> H ed ha un costo di <?= $prezzo ?> euro.
                    <?php else: ?>
                    Questa attività è gratuita.
                    <?php endif; ?>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum praesentium pariatur quod minima magni quos, tenetur voluptatem esse modi quia. Asperiores hic pariatur omnis officia nemo impedit! Doloribus in eveniet quis et eum veritatis odit at! Delectus expedita tenetur eligendi, error quos numquam nemo illum! Aut quae quam at minus, accusamus, saepe quidem suscipit dolorem nesciunt error hic atque? Repellat sint numquam optio commodi eligendi assumenda exercitationem itaque qui soluta quia esse possimus reprehenderit cum aut ducimus obcaecati dignissimos non maiores eveniet deserunt, animi laudantium omnis dolor! Omnis consequatur vel nesciunt quisquam explicabo animi, sint incidunt laboriosam aliquid sed inventore voluptatem possimus illo amet reiciendis ex eveniet dignissimos commodi molestiae quasi tenetur, hic veniam doloremque? Eveniet itaque veritatis, vitae minus ab adipisci magni consectetur velit repudiandae quidem veniam saepe ea, omnis quisquam temporibus. Repellat iure sapiente deserunt, atque fugit rerum dolore molestias blanditiis culpa dolorum eos necessitatibus, dignissimos ad, distinctio ab. Eos dolorem culpa voluptatum architecto soluta eaque assumenda dolorum, quasi ab, recusandae at aliquid consectetur blanditiis autem sunt, pariatur fugiat error quos nostrum. Incidunt excepturi, vero voluptatem blanditiis, ullam corporis asperiores autem eligendi aut quis doloremque itaque. Nihil animi sunt nesciunt reiciendis optio, ab similique quia pariatur nobis eligendi hic blanditiis cum consectetur asperiores ea a vero iste ipsa laboriosam rem suscipit sequi magni non? Recusandae mollitia consectetur quia necessitatibus labore, fuga voluptates nam iure voluptatum beatae ad dolore sapiente accusantium perspiciatis vero quidem magni ea totam! Totam itaque illo, sint pariatur ipsa eaque sed vitae ea a quasi mollitia possimus corporis temporibus quam id voluptates omnis recusandae accusantium nostrum fugit expedita ut. Aperiam eligendi, ab, molestiae ea est ipsam at consequatur explicabo suscipit dignissimos, expedita voluptatibus exercitationem. Est consequuntur quis debitis totam libero amet, excepturi corrupti reiciendis numquam cumque quaerat, nulla repellat, ullam obcaecati laborum dolores dolor explicabo iusto illum deleniti maiores. Eum nemo ab, temporibus animi pariatur ratione doloribus repellendus, sapiente sit architecto eveniet a ullam? Quod quia quisquam debitis libero blanditiis ab iusto temporibus, culpa accusamus nostrum at dolore architecto cumque non expedita inventore soluta illo saepe quo. Aliquid officia eos, dolorem alias nostrum autem, perspiciatis, facilis architecto mollitia inventore consectetur ab vero praesentium voluptatum impedit voluptate! Sequi illum officia magnam quisquam reiciendis nulla modi, delectus, repellendus nihil similique, ipsam deserunt animi. Molestiae distinctio explicabo veniam ea reiciendis totam porro enim omnis consequatur magnam, exercitationem, vel facilis ab sapiente error ratione eius sed qui in similique! Ea repellendus et, amet voluptatem sint natus dolorem laboriosam quo eum sed placeat reprehenderit non ipsa perferendis vero necessitatibus impedit nobis blanditiis maxime nesciunt assumenda aliquid modi? Nemo ratione provident magni vitae, animi dolore perspiciatis cumque ducimus saepe commodi eos libero, esse ipsa quibusdam vel officiis asperiores. Animi tenetur explicabo aperiam. Ipsam tenetur illum nihil vitae, eos eius fugit mollitia et, tempora eaque accusantium repudiandae explicabo nulla incidunt dolor sunt amet illo fugiat impedit sapiente voluptas quis! Aliquid esse, tenetur molestiae, porro vel exercitationem ratione dicta ipsa ut delectus corporis veritatis impedit enim placeat reiciendis! Eos ut enim itaque tempore.</p>
                </div>
                <div class="sidebar">
                    <div class="sticky_info">
                        <h1>informazioni</h1>
                    </div>
                </div>
            </div>
    </div>
</div>

<?php snippet('footer'); ?>