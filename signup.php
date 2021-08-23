<?php
include ("classes/class.user.php");
$n = new User();
if (isset($_POST['Submit'])) {
    $n->signup();
}
?>

<html>
    <head>

        <title>Signup</title>
    </head>

    <body>
        <h1>SIGN UP FORM</h1>
        <form id="form1" name="form1" method="post" action="" enctype="multipart/form-data">
            <p>
                <label for="Name">Name</label>
                <input type="text" name="Name" id="Name" />
            </p>
            <p>
                <label for="Email">Email</label>
                <input type="text" name="Email" id="Email" />
            </p>
            <p>
                <label for="Address">Address</label>
                <input type="text" name="Address" id="Address" />
                <br />
            </p>
            <p>
                <label for="Phone">Phone</label>
                <input type="text" name="Phone" id="Phone" />
            </p>
            <p>
                <label for="Password">Password</label>
                <input type="password" name="Password" id="Password" />
            </p>
            <p> Select Image : <input type="file" name="userImage"></p>
            <p>
                <input type="submit" name="Submit" id="Submit" value="Submit" />
            </p>
            
            <p>&nbsp;</p>
        </form>
    </body>
</html>
