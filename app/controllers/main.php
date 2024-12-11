<?php
class MainController
{
    public function content()
    {
        $content_view = 'app/views/mainpage.php';
        $content_css = ['./css/main.css'];
        include 'app/views/layout.php';
    }
}
