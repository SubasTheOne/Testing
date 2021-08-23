<?php

class User {

    private $host = "localhost";
    private $db = "kathford_db";
    private $user = "root";
    private $pass = "";
    private $mysqli;

    function __construct() {
        $this->mysqli = new MySQLi($this->host, $this->user, $this->pass, $this->db);
        if ($this->mysqli->error) {
            echo $this->mysqli->error;
        } //else {
            //echo"connection successful";
    }
    
        private function doUpload(){
            $image=$_FILES['userImage'];
            if($_FILES['userImage']['size']>0)
            {
                $dir = 'uploads';
                $srcFilename= $_FILES['userImage']['name'];
                $tmpFilename=$_FILES['userImage']['tmp_name'];
            }
            $target= $dir . '/' . $srcFilename;
            if(move_uploaded_file($tmpFilename, $target)){
                return $srcFilename;
                
            }else{
                echo "Upload Failed"; die();
                 }  
        
            }
            
            
            
        

    function signup() {
        $name = $_POST['Name'];
        $email = $_POST['Email'];
        $address = $_POST['Address'];
        $phone = $_POST['Phone'];
        $password = $_POST['Password'];
        $image = $this->doUpload();
        echo $image;
        $sql = "insert into tbl_user(name,email,address,phone,password,image) values('$name','$email','$address','$phone','$password','$image')";
        $this->mysqli->query($sql);
        if ($this->mysqli->error) {
            echo $this->mysqli->error;
        } else {
            echo "insertion sucessful";
        }
    }

    function getAll() {
        $sql = "select * from tbl_user";
        $res = $this->mysqli->query($sql);
        $data = array();
        while ($row = $res->fetch_array(MYSQLI_ASSOC)) {
            $data[] = $row;
        }
        return $data;
    }
    
    function getSingle($id)
    {
        $sql="select * from tbl_user where id='$id'";
        $res=$this->mysqli->query($sql);
        return $res->fetch_array(MYSQLI_ASSOC);    
    }
    function updateUser($id)
    {
        $name = $_POST['Name'];
        $email = $_POST['Email'];
        $address = $_POST['Address'];
        $phone = $_POST['Phone'];
        $password = $_POST['Password'];
        $image = $this->doUpload();
        $sql="UPDATE tbl_user SET name='$name', email='$email', address='$address', phone='$phone', password='$password', image='$image' WHERE id='$id'";
        $this->mysqli->query($sql);
        if($this->mysqli->error)
        {
            echo $this->mysqli->error;
        }else{
            echo 'Update Successfull';
        }
        
    }
    
    function deleteUser($id)
    {
        $sql="delete from tbl_user where id='$id'";
        $this->mysqli->query($sql);
    }
    
    function login(){
        session_start();
        $username=$_POST['Username'];
        $password=$_POST['Password'];
        $sql="SELECT * FROM tbl_user WHERE email='$username' AND password='$password'";
        $res= $this->mysqli->query($sql);
        $user=$res->fetch_array(MYSQLI_ASSOC);
        $uid=$user['id'];
        $name=$user['name'];
        if($res->num_rows >0)
        {
            $_SESSION['name']=$name;
            $_SESSION['uid']=$uid;
            header("location:dashboard.php");
        }
        else
        {
            echo "invalid username or password";
        }
    }
}
      



?>