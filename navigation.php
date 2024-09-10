<div class="navigation_frame" role="navigation">
    <!--<picture>
        <img class="logo" src="media/logoFull.png" alt="Company logo featuring a Dodo">
    </picture>
    <a href="index.php">
        <div class="navigation_item">
            <p>Home</p>
        </div>
    </a>
    <a href="product.php">
        <div class="navigation_item">
            <p>Produkt</p>
        </div>
    </a>
    <a href="team.php">
        <div class="navigation_item">
            <p>Team</p>
        </div>
    </a>
    <a href="contact.php">
        <div class="navigation_item">
            <p>Kontakt</p>
        </div>
    </a>-->
    <?php
        $urls = array(
            'Home' => '/index.php',
            'Product' => '/product.php',
            'Team' => '/team.php',
            'contact' => '/contact.php',
        );
        
        foreach ($urls as $name => $url) {
            print '<a class="navigation_item href=" '.$url.' ">'.
                    '<div class="navigation_item"'.(($currentPage === $name) ? ' class="active" ': '').
                        '><p>'.$name.'</p></div></a>';
        }
    ?>
</div>
