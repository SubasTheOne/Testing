<?php
include("classes/class.user.php");
$n = new user();
$users = $n->getAll();
print_r($users);
?>

<html>
    <head>

    </head>
    <body>
        <table border="2px">
            <tr>
                <td>id</td>
                <td>Name</td>
                <td>Email</td>
                <td>Phone</td>
                <td>Address</td>
                <td>Image</td>
                <td colspan="2">Option</td>
                
            </tr>

            <?php foreach ($users as $u): ?>
                <tr>
                    <td><?php echo $u['id']; ?></td>
                    <td><?php echo $u['name']; ?></td>
                    <td><?php echo $u['email']; ?></td>
                    <td><?php echo $u['phone']; ?></td>
                    <td><?php echo $u['address']; ?></td>
                    <td><img width="100px" src="uploads/<?php echo $u['image']; ?>"></td>
                    
                    <td><a href='editUser.php?id=<?php echo $u['id'];?>'target=''>Edit</a></td>
                    <td><a href="deleteUser.php?id=<?php echo $u['id'];?>"onclick="return confirm('Are you sure?')">Delete</a></td>
                </tr>
            <?php endforeach; ?>

        </table>

    </body>


</html>