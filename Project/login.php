<?php
//include ("classes/class.user.php");
session_start();
include('classes/class.user.php');
$n = new user();
if (isset($_SESSION['uid'])) {
    header("location:dashboard.php");
}
if (isset($_POST['submit'])) {
    $n->login();
}
?>

<html>
    <head><title> Login Form</title></head>

    <body>
        <h1>LOG IN</h1>
        <form id="form1" name="form1" method="post" action="">
            <p>
                <label for="Name">Username</label>
                <input type="text" name="Username" id="Username "/>
            </p>
            <p>
                <label for="Password">Password</label>
                <input type="password" name="Password" id="Password"/>
            </p>
            <p>
                <input type="submit" name="submit" value="Submit" />
            </p>
            <p>&nbsp;</p>
        </form>


    </body>





</html>
