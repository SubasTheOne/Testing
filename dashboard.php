<?php
     session_start();
     if(!isset($_SESSION['uid'])){
     header("location:login.php");
         
     }
     
?>
<?php
$id=$_SESSION['uid'];
include ('classes/class.user.php');
$n=new user();
$single=$n->getSingle($id)
?>


<html>
    <head><title>Dashboard</title>
    
    <body>
        Welcome <b><?php echo $_SESSION['name'];?></b>
        <img width="100px" src="uploads/<?php echo $single['image']; ?>">
            <a href="logout.php"> Logout</a>   
            <a href="editUser.php?id=<?php echo $single['id'];?>">Edit Profile</a>
            <a href="deleteUser.php?id=<?php echo $single['id'];?>">Delete Profile</a>   
    </body>
</head>
    
    
    
</html>