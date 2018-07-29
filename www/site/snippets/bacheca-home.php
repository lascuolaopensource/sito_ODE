<div class="container">
    <div class="bacheca header">
        <div class="bacheca container">
            <h2>Ad officina degli Esordi puoi..</h2>
        </div>
    </div>

    <div class="bacheca slideshow">
        <div class="gallery">
            <?php 
            $azioni = page('azioni')->children();
            foreach($azioni as $action):?>
                <div>
                    <p><?= $action->title() ?></p>
                </div>
            <?php endforeach;?>
        </div>
    </div>

    <div class="bacheca">
        <div class="bacheca container info_box_container">
            <div class="bacheca info_box">
                    <h1>Dove</h1>
                    <p>Tocca su uno spazio</p>
            </div>
            <div class="bacheca info_box">
                        <h1>Contattaci</h1>
                        <p>Tocca su uno spazio</p>
            </div>
        </div>
    </div>
</div>