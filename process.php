<?php
	/*
		This script does one of 3 things:
			1. If the user is visiting for their first time, present a login form
			2. If the login was submitted, process the credentials (username/password)
				Success = Set a cookie and redirect to page1.php
				Failure = Present the login form again with an error
			3. If the user is already logged in, redirect them to page1.php
	*/
// pull the username from the cookie $_COOKIE, if it exists
$username = empty($_COOKIE['username']) ? '' : $_COOKIE['username'];

//if user is logged in, redirect them home
if($username){
    header("Location: fanzoneboot.html");
    exit;
}
$action = empty($_POST['action'])? '' : $_POST['action'];
if($action == "do_login"){
    handle_login();
}
else{
    login_form();
}
function login_form(){
    $username ="";
    $error = "";
    require "login.php";
}
function handle_login(){
    $username = empty($_POST['username']) ? '' : $_POST['username'];
    $password = empty($_POST['username']) ? '' : $_POST['password']; 

if($username == "test" && $password == "pass"){
    //if they match set a cookie and send the user to page 1.php
    setcookie('username',$username);
    header("Location: fanzoneboot.html");
    exit;
}
else{
    $error = "error incorect username or pass";
    require "login.php";
}

}
	
?>