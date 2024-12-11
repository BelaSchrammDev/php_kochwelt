<header class="main_container">
    <img src="./img/logo.png" alt="">
    <nav id="nav_bar" class="nav_bar">
        <?php
        include './config.php';
        foreach ($header_links as $nav_item) {
            $highlight = '';
            if ($nav_item['page_id'] == $current_page) {
                $highlight = ' class="nav_hightlight"';
            }
            echo '<a' . $highlight  . ' href="' . $nav_item['url'] . '">' . $nav_item['title'] . '</a>';
        }
        ?>
    </nav>
    <img onclick="burger_menu_open()" class="burger_menu" src="./img/burger.svg" alt="">
    <div id="nav_bar_overlay" onclick="burger_menu_close()" class="nav_bar_overlay"></div>
</header>