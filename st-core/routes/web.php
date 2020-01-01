<?php
use lib\View;
use lib\JS;
use lib\Rout;
use core\Exceptions\_404_NOT_FOUND;

Rout::get("/", function ($arg) {
    View::render("main/main");
});

Rout::set("/contactus", function ($arg) {
    try {
        if (!isAjaxRequest()) {
            throw new _404_NOT_FOUND;
        }
        View::render("main/contactus");
    } catch (\Exception $e) {
        $e->errorMessage();
    }
});

Rout::get("/events", function ($arg) {
    try {
        if (!isAjaxRequest()) {
            throw new _404_NOT_FOUND;
        }
        View::render("main/events");
    } catch (\Exception $e) {
        $e->errorMessage();
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
function isAjaxRequest()
{
    if (!empty($_SERVER["HTTP_X_REQUESTED_WITH"]) && $_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest") {
        return true;
    }
    return false;
}
