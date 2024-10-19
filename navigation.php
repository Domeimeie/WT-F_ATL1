<header class="fixed-top">
    <div class="container flex-center h-100">
        <picture>
            <a href="/">
                <img class="logo" src="media/logoFull.png" alt="Dodo.tv logo">
            </a>
        </picture>
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
                    print '<li><a href=" ' . $url . '"' . (($currentPage === $name) ? ' class="active" ' : '') . ' ">' . $name .
                        '</a></li>';
                }
                ?>
            </ul>
        </nav>
        <button id="hamburger">
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
            print '<li><a href=" ' . $url . '"' . (($currentPage === $name) ? ' class="activeMobile" ' : '') . ' ">' . $name .
                '</a></li><hr>';
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