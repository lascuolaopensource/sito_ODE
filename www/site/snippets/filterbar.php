<div class="filterbar">
<ul>

    <?php if($tag = param('tag')): ?>
        <?php if($tag == "corso"): ?>
        <li class="button active">
        <?php else: ?>
        <li class="button">
        <?php endif; ?>
    <?php else: ?>
        <li class="button">
    <?php endif ?>   
        <a href="/eventi/tag:corso">corso</a>
    </li>
    
    <?php if($tag = param('tag')): ?>
        <?php if($tag == "workshop"): ?>
        <li class="button active">
        <?php else: ?>
        <li class="button">
        <?php endif; ?>
    <?php else: ?>
        <li class="button">
    <?php endif ?>   
        <a href="/eventi/tag:workshop">workshop</a>
    </li>


    <?php if($tag = param('tag')): ?>
        <?php if($tag == "laboratorio"): ?>
        <li class="button active">
        <?php else: ?>
        <li class="button">
        <?php endif; ?>
    <?php else: ?>
        <li class="button">
    <?php endif ?>   
        <a href="/eventi/tag:laboratorio">laboratorio</a>
    </li>
    
    <?php if($tag = param('tag')): ?>
        <?php if($tag == "mostra"): ?>
        <li class="button active">
        <?php else: ?>
        <li class="button">
        <?php endif; ?>
    <?php else: ?>
        <li class="button">
    <?php endif ?>   
        <a href="/eventi/tag:mostra">mostra</a>
    </li>
    
    <?php if($tag = param('tag')): ?>
        <?php if($tag == "reading"): ?>
        <li class="button active">
        <?php else: ?>
        <li class="button">
        <?php endif; ?>
    <?php else: ?>
        <li class="button">
    <?php endif ?>   
        <a href="/eventi/tag:reading">reading</a>
    </li>
    
    <?php if($tag = param('tag')): ?>
        <?php if($tag == "concerto"): ?>
        <li class="button active">
        <?php else: ?>
        <li class="button">
        <?php endif; ?>
    <?php else: ?>
        <li class="button">
    <?php endif ?>   
        <a href="/eventi/tag:concerto">concerto</a>
    </li>
    
    <?php if($tag = param('tag')): ?>
        <?php if($tag == "jam"): ?>
        <li class="button active">
        <?php else: ?>
        <li class="button">
        <?php endif; ?>
    <?php else: ?>
        <li class="button">
    <?php endif ?>   
        <a href="/eventi/tag:jam">jam</a>
    </li>
    
    <?php if($tag = param('tag')): ?>
        <?php if($tag == "evento"): ?>
        <li class="button active">
        <?php else: ?>
        <li class="button">
        <?php endif; ?>
    <?php else: ?>
        <li class="button">
    <?php endif ?>   
        <a href="/eventi/tag:evento">evento</a>
    </li>

    <?php if(!$tag = param('tag')): ?>
    <li class="button active">
    <?php else: ?>
    <li class="button">
    <?php endif; ?>
        <a href="/eventi/">tutti</a>
    </li>
</ul>

</div>