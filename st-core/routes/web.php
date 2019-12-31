<?php
use lib\View;
use lib\JS;
use lib\Rout;

Rout::get("/", function ($arg) {
    View::render("main/main");
});

Rout::get("/contactus", function ($arg) {
    //View::render("main/login");
    View::render("main/contactus");
});

Rout::get("/register", function ($arg) {
    $var = $arg["var"];
    if (count($var)==1) {
        View::render("main/register");
    } elseif ($var[1]=="submit") {
        JS::console("log", "hi");
        header('Refresh: 3; URL='.HOST);
    }
});

Rout::get("/install", function ($arg) {
    require_once(ROOT."database/seeder.php");
});

if (islogin()) {
    Rout::get("/insItem", function ($arg) {
        if (Admin::insertNavItem($_GET['url'], $_GET['name'])) {
            JS::alert("insert succesfully");
        }
        View::render("main/main");
    });

    Rout::get("/delItem", function ($arg) {
        if (Admin::deleteNavItem($_GET['val'])) {
            JS::alert("delete succesfully");
        }
        View::render("main/main");
    });

    Rout::get("/logout", function ($arg) {
        session_unset();
        session_destroy();
        View::render("main/main");
    });
}

function islogin()
{
    if (isset($_SESSION['username'])) {
        return(true);
    }
    return false;
}
