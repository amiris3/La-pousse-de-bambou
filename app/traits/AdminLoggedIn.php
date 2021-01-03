<?php
namespace app\traits;

trait AdminLoggedIn {

    public function redirectLogIn() {
        if (!isset($_SESSION['admin'])) {
            header('Location:index.php?page=adminLogin');
            die();
        }
    }
}
