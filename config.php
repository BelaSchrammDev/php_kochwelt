<?php

$current_page = isset($_GET['page']) ? $_GET['page'] : 'home';

$header_links = [
    [
        "title" => "Start",
        "page_id" => "home",
        "url" => "index.php",
    ],
    [
        "title" => "Rezept des Tages",
        "page_id" => "index.php?page=recipe",
        "url" => "salad.html",
    ],
    [
        "title" => "Kontakt",
        "page_id" => "contact",
        "url" => "index.php?page=contact",
    ],
    [
        "title" => "Impressum",
        "page_id" => "imprint",
        "url" => "index.php?page=imprint",
    ],
];

$footer_links = [
    [
        "title" => "Kontakt",
        "page_id" => "contact",
        "url" => "index.php?page=contact",
    ],
    [
        "title" => "Impressum",
        "page_id" => "imprint",
        "url" => "index.php?page=imprint",
    ],
    [
        "title" => "Datenschutz",
        "page_id" => "policy",
        "url" => "index.php?page=policy",
    ],
];