<?php
class ContactController
{
    public function content()
    {
        $content_view = 'app/views/contactpage.php';
        $content_css = ['./css/contact.css'];
        $content_scripts = ['./js/contact.js'];
        include 'app/views/layout.php';
    }
}
