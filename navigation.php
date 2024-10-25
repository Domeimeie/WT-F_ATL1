<header class="fixed-top">
    <div class="container flex-center h-100">     
        <a href="/">
            <picture>
                <img class="logo" src="media/logoFull.webp" alt="Dodo.tv logo">
            </picture>
        </a>
        <nav class="desktop">
            <ul>
                <?php
                $urls = array(
                    'Home' => '/',
                    'Product' => '/product.php',
                    'Team' => '/team.php',
                    'Contact' => '/contact.php',
                );

                foreach ($urls as $name => $url) {
                    echo '<li><a href="'.$url.'"'.($currentPage === $name ? ' class="active">' : '>').$name.'</a></li>';
                }
                ?>
            </ul>
        </nav>
        <button id="hamburger" title="menuButton">
            <span></span>
            <span></span>
        </button>
    </div>
</header>
  <nav class="mobile">
    <ul>
    <?php
        $urls = array(
            'Home' => '/',
            'Product' => '/product.php',
            'Team' => '/team.php',
            'Contact' => '/contact.php',
        );
        foreach ($urls as $name => $url) {
            echo '<li><a href="'.$url.'"'.(($currentPage === $name) ? ' class="activeMobile">' : '>').$name.'</a></li>';
        }
        ?>
    </ul>
  </nav>
<script>
// Setup hamburger button
const hamburger = document.getElementById('hamburger');
// Setup interaction tags
const mobileNav = document.querySelector('nav.mobile');
const animationBurger = document.querySelector('button#hamburger');
// Setup click event for hamburger button
hamburger.addEventListener('click', () => {
    // toggle classes for tags
    mobileNav.classList.toggle('open');
    animationBurger.classList.toggle('spanActive');
});
</script>