<?php

include('Connection.php');
error_reporting(0);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        label{
            font-size: 20px;
            font-weight: bolder;
            font-family: Arial, Helvetica, sans-serif;
            color: white;
        }

        input{
            height: 30px;
            width: 300px;
            border-radius: 10px;
            border: none;
            background-color: antiquewhite;

        }

        input[type='submit']{
            width: 150px;
            font-size: 18px;
            font-weight: bolder;
            background-color: rgb(101, 97, 97);
            color: white;
        }

        h1{
            font-weight:bolder;
            font-family: Arial, Helvetica, sans-serif;
            text-decoration: underline;
            color: rgb(7, 116, 206);
        }

        .div1{
            width: 500px;
            /* background-color: rgb(44, 178, 183); */
            margin: 150px 400px;
            padding: 30px 150px;
        }

        body{
            background-image: url('image/lib1.jpg');
            background-size: cover;
        }

        h2{
            color:white;
        }
    </style>
    
    <title>User Registration</title>
</head>
<body>
    <div class="div1">
        <div class="hd">
            <h1>User Sign Up Form</h1>

        </div>
        <form action="" method="post">
            <label>Username:</label>
            <input type="text" name="username" id=""><br><br>
            <label>Email:&ensp;&ensp;&ensp;&ensp;</label>
            <input type="email" name="email" id=""><br><br>
            <label>Password:</label>
            <input type="password" name="password" id=""><br><br>
            <input type="submit" name="signupbtn" value="Sign Up">
            <input type="submit" name="backbtn" value="Back">
        </form>

    </div>
    
</body>
</html>

<?php

$Username=$_POST['username'];
$Email=$_POST['email'];
$Password=$_POST['password'];

if(isset($_POST['signupbtn'])){
    $query="insert into `user`(Username,Email,Password) values('$Username','$Email','$Password')";

    $run_query=mysqli_query($conn,$query);
    if($run_query){
        echo "<h2>User Sign Up Successfully!</h2>";
    }
    else{
        echo "<h2>Error!</h2>";
    }
}

?>

<?php

if(isset($_POST['backbtn'])){
    header("location:Homepage.php");
}
?>