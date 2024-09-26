<header class="fixed-top">
    <div class="container flex-center h-100">
    <picture>
        <img class="logo" src="media/logoFull.png" alt="Company logo featuring a Dodo">
    </picture>
    <nav>
        <ul>
            <?php
                $urls = array(
                'Home' => '/',
                'Product' => '/product.php',
                'Team' => '/team.php',
                'Contact' => '/contact.php',
                );

                foreach ($urls as $name => $url) {
                print '<li><a href=" '.$url.'"'. (($currentPage === $name) ? ' class="active" ': '').' ">'.$name.
                        '</a></li>';
                }
            ?>
        </ul>
    </nav>
    </div>
</header>
