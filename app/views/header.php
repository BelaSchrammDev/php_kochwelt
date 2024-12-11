<header class="main_container">
    <img src="./img/logo.png" alt="">
    <nav id="nav_bar" class="nav_bar">
        <!-- <?php echo $page; ?> -->
        <a href="./index.php?page=home">Start</a>
        <a href="./salad.html">Rezept des Tages</a>
        <a href="./index.php?page=contact">Kontakt</a>
        <a href="./index.php?page=imprint">Impressum</a>
    </nav>
    <img onclick="burger_menu_open()" class="burger_menu" src="./img/burger.svg" alt="">
    <div id="nav_bar_overlay" onclick="burger_menu_close()" class="nav_bar_overlay"></div>
</header>