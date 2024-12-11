<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kochwelt</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/fonts.css">
    <?php
    if (isset($content_css))
        foreach ($content_css as $css) {
            echo '<link rel="stylesheet" href="' . $css . '">';
        }
    ?>
    <script src="./js/burger_menu.js"></script>
    <?php
    if (isset($content_scripts))
        foreach ($content_scripts as $script) {
            echo '<script src="' . $script . '"></script>';
        }
    ?>
</head>

<body>
    <?php include 'app/views/header.php'; ?>
    <div class="main_container main_section">
        <?php include $content_view; ?>
    </div>
    <?php include 'app/views/footer.php'; ?>
</body>

</html>