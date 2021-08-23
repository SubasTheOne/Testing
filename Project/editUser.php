<?php
include ("classes/class.user.php");  
$id=$_GET['id'];
  $n=new user();
  $single=$n->getSingle($id);
  if(isset($_POST["Submit"]))
  {
      $n->updateUser($id);
      header("location:user.php");
  }


?>

<html>
    <head>

        <title>Signup</title>
    </head>

    <body>
        <h1>EDIT FORM</h1>
        <form id="form1" name="form1" method="post" action="" enctype="multipart/form-data">
            <p>
                <label for="Name">Name</label>
                <input type="text" name="Name" id="Name" value="<?php echo $single['name'];?>" />
            </p>
            <p>
                <label for="Email">Email</label>
                <input type="text" name="Email" id="Email" value="<?php echo $single['email'];?>" />
            </p>
            <p>
                <label for="Address">Address</label>
                <input type="text" name="Address" id="Address" value="<?php echo $single['address'];?>" />
                <br />
            </p>
            <p>
                <label for="Phone">Phone</label>
                <input type="text" name="Phone" id="Phone" value="<?php echo $single['phone'];?>" />
            </p>
            <p>
                <label for="Password">Password</label>
                <input type="password" name="Password" id="Password" value="<?php echo $single['password'];?>" />
            </p>
            <p> Select Image : <input type="file" name="userImage"></p>
            <p>
                <input type="submit" name="Submit" id="Submit" value="Submit" />
            </p>
            <p>&nbsp;</p>
        </form>
    </body>
</html>
