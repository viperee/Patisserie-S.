<section class="section-titre background-color-chablis">
    <?php
    $titre = '';
    switch ($page) {
        case 'patisseries':
            $titre = 'les patisseries';
            break;
        case 'apropos':
            $titre = 'a propos';
            break;
        case 'contact':
            $titre = 'contact';
            break;
    }
    ?>
    <div>
        <h1 class="text-center"><?php echo $titre ?></h1>
    </div>

</section>