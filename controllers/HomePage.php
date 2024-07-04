<!-- controllers/HomeController.php -->
<?php
class HomeController
{
    public function index()
    {
        include '../views/header.php';
        include '../views/index.php';
        include '../views/footer.php';
    }
}
?>