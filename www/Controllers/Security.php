<?php
namespace App\Controllers;

use App\Core\View;
class Security{

    public function login(): void
    {
        new View("Security/login", "front");
    }
    public function logout(): void
    {
        echo "Logout";
    }
    public function register(): void
    {
        new View("Security/register", "front");
    }


}