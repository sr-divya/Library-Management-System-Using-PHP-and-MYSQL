<?php

include('Connection.php');
session_start();
// $_SESSION['user']="divya";

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <style>
    .div1{
        /* background-color: rgb(238, 178, 210); */
        margin-top: 150px;
        margin-left:400px;
        margin-right:400px;
        padding:50px 150px ;
        border-radius: 20px;
        box-shadow: 20px 20px 8px black;
    }

    h3{
        font-size: 35px;
        font-family: Arial, Helvetica, sans-serif;
        text-decoration: underline;
        color: white;
    }
    label{
        font-size: 20px;
        font-family: Arial, Helvetica, sans-serif;
        color:white;
        
    }

    input{
        height: 40px;
        width:400px;
        border-radius: 10px;
        border:none;
        background-color:#a0a0a0;
        
    }

    input[type='submit']{
        height: 40px;
        width: 150px;
        font-size: 15px;
        font-weight: bold;
        background-color: gray;
        color: white;
    }
    body{
        /* background-color: gray; */background-image: url('image/lib1.jpg');
            background-size: cover;
    }

    /* input:hover{
        background-color: papayawhip;
        
    } */

    

    
   </style>
    <title>Admin Panel</title>
</head>
<body>
    <div class="div1">
        <form action="" method="POST">
            <h3> Admin Login Form</h3>
            <label><b>Enter Username:</b></label><br><input type="text" name="username" id=""><br>
            <label><b>Password:</b></label><br><input type="password" name="password" id=""><br><br>
            <input type="submit" name="loginbtn" value="Log In">
            <input type="submit" name="backbtn" value="Back">
        </form>

    </div>
    
</body>
</html>

<?php

// $username=$_POST['username'];
// $password=$_POST['password'];
// $_SESSION['user']="Divya Sengar";


if(isset($_POST['loginbtn']))
{
    $Username=mysqli_real_escape_string($conn,$_POST['username']);
    $Password=mysqli_real_escape_string($conn,$_POST['password']);
    $query="select * from admin where Admin_name='$Username' and Password='$Password'";
    $_SESSION['user']=$Username;

    $result=mysqli_query($conn,$query);
    $count=mysqli_fetch_assoc($result);
    if($count){
        if(isset($_SESSION['user'])){
            header("location:Dashboard.php");
        }
        else{
                header("location:Homepage.php");
        }
    }
}
    
    

?>

<?php

if(isset($_POST['backbtn'])){
    header("location:Homepage.php");
}