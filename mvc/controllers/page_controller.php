<?php
class PagesController
{
    public function home()
    {
        if (isset($_GET['username'])) {
            $username = $_GET['username'];
        } else {
            $username = "";
        }

        require_once('views/pages/home.php');
    }

    public function error()
    {
        require_once('views/pages/error.php');
    }
}
?>
