<?php

// system
$system_name = "DCSucs blog";
$systen_lang = "pl";
$system_Mail_email = "phpstarter@phpstarter.example";
$system_Mail_password = "DCSucs blog";
$system_Mail_sentFrom = "DCSucs blog";

// require classes (don't change this)
function __autoload($class_name) {
     require_once './app/classes/' . $class_name . '.php';
}


// functions
$host = $_SERVER['REQUEST_URI'];
// echo $host;
if ($host == "/dcssie/register.php" || $host == "/dcssie/login.php") {
     echo "";
}else {
     auth::isloggedin(); // check if user is loggedin or not
}

// logout
if (isset($_POST['signoutbtn'])) {
     auth::logout();
}

$loggedin = auth::loggedin();
$loggedinUserID = DB::query('SELECT id FROM users WHERE id=:id', [':id'=>$loggedin]);
