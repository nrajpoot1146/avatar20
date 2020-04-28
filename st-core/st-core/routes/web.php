<?php
use lib\View;
use lib\JS;
use lib\Rout;
use lib\Mail;
use core\Exceptions\_404_NOT_FOUND;

Rout::get("/", function ($arg) {
    View::render("main/main");
});

Rout::get("/ThePandemicCode", function ($arg) {
    $var = $arg["var"];
    if (isset($var[1]) && $var[1] == "submit") {
        echo "string";
    } else {
        View::render("main/pand");
    }
});
Rout::post("/ThePandemicCode", function ($arg) {
    $var = $arg["var"];
    if ($var[1] == "submit") {
        //session_start();
        $error = null;
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $year = $_POST['year'];
            $email = $_POST['email'];
            $contactno = $_POST['contactno'];
            $branch = $_POST['branch'];
            $gender = $_POST['gender'];
            $college = $_POST['college'];
            $city = $_POST['city'];
            $rollno = $_POST['rollno'];

            // if(!isset($name)){
            // 	$error = "Error: name is empty.";
            // }
            // if(!isset($year)){
            // 	$error = "Error: year is empty.";
            // }
            // if(!isset($email)){
            // 	$error = "Error";
            // }
            // if(){

            // }
            // if(){

            // }


            if (!empty($name)) {
                if (!empty($college)) {
                    $host = "";
                    $dbusername = "Avatar";
                    $dbpassword = "Narendra1@";
                    $dbname = "codingcontest";
                    // Create connection
                    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
                    if (mysqli_connect_error()) {
                        die('Connect Error (' . mysqli_connect_errno() . ') '
                    . mysqli_connect_error());
                    } else {
                        $sql = "INSERT INTO registration (rollno,name, year,email,branch,gender,college,contactno,city)
		values ('$rollno','$name','$year','$email','$branch','$gender','$college','$contactno','$city')";
                        if ($conn->query($sql)) {
                            // session_unset();
                            // session_destroy();

                            echo "<script>";
                            echo "alert('Form submitted successfull'); window.location = '". HOST ."/ThePandemicCode/';";
                            echo "</script>";
                        } else {
                            echo "Error: " . $sql . "
				" . $conn->error;
                        }
                    }
                } else {
                    echo "enter college name";
                    header("Location:submit.php?error=enterCollegeName");
                    die();
                }
            } else {
                echo "enter Name";
                header("Location:submit.php?error=enterName");
                die();
            }
        }
    } else {
        View::render("main/pand");
    }
});

Rout::set("/ourteam", function ($arg) {
    try {
        if (!isAjaxRequest()) {
            throw new _404_NOT_FOUND;
        }
        View::render("main/ourteam");
    } catch (\Exception $e) {
        $e->errorMessage();
    }
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
Rout::get("/workshops", function ($arg) {
    try {
        if (!isAjaxRequest()) {
            throw new _404_NOT_FOUND;
        }
        View::render("main/workshop");
    } catch (\Exception $e) {
        $e->errorMessage();
    }
});

Rout::get("/events", function ($arg) {
    $var = $arg['var'];
    if (!isset($var[1])) {
        try {
            if (isAjaxRequest()) {
                View::render("main/events");
            } else {
                View::render("main/main");
            }
        } catch (\Exception $e) {
            $e->errorMessage();
        }
    } else {
        if (isset($var[2])) {
            //echo("abstract/$var[1]/$var[2]");
            View::render("abstract/abstract", $var);
        }
    }
});
Rout::get("/aboutus", function ($arg) {
    try {
        if (!isAjaxRequest()) {
            throw new _404_NOT_FOUND;
        }
        View::render("main/aboutus");
    } catch (\Exception $e) {
        $e->errorMessage();
    }
});
// Rout::get("/abstract", function ($arg) {
//     view::render("abstract/".$_GET["eventName"]);
// });
Rout::get("/abstract", function ($arg) {
    view::render("abstract/".$_GET["eventName"]);
});

Rout::get("/install", function ($arg) {
    require_once(ROOT."database/seeder.php");
});

Rout::post("/formtomail", function ($arg) {
    if (Mail::saveMailToInbox($_POST['email'], $_POST['name'], $_POST['message'], "From drop us line.")) {
        echo "Message sent!";
    }
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
