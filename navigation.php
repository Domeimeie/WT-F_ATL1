<header class="fixed-top">
    <div class="container flex-center h-100">
        <picture>
            <img class="logo" src="media/logoFull.png" alt="Dodo.tv logo">
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
// Hamburger-Button in Variable speichern
const hamburger = document.getElementById('hamburger');
// Mobile Navigation in Variable speichern
const mobileNav = document.querySelector('nav.mobile');
const crossBurger = document.querySelector('button#hamburger');
// Klick-EventListener auf Hamburger registrieren...
hamburger.addEventListener('click', () => {
    // ..der bei Klick die "open" Klasse auf der mobilen Navigation toggelt.
    mobileNav.classList.toggle('open');
    crossBurger.classList.toggle('spanActive');
});
</script>