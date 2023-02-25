<?php

include('Connection.php');

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
            color: rgb(224, 230, 235);
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

        h3{
            color:white;
        }
    </style>
    
    <title>User Registration</title>
</head>
<body>
    <div class="div1">
        <div class="hd">
            <h1>User Log In Form</h1>

        </div>
        <form action="" method="post">
            
            <label>Email:&ensp;&ensp;&ensp;&ensp;</label>
            <input type="email" name="email" id=""><br><br>
            <label>Password:</label>
            <input type="password" name="password" id=""><br><br>
            <input type="submit" name="signinbtn" value="Sign In">
            <input type="submit" name="backbtn" value="Back">
        </form>

    </div>
    
</body>
</html>

<?php

if(isset($_POST['signinbtn'])){
    $Email=mysqli_real_escape_string($conn,$_POST['email']);
    $Password=mysqli_real_escape_string($conn,$_POST['password']);

    $query="select * from `user` where Email='$Email' and Password='$Password'";

    $run_query=mysqli_query($conn,$query);
    if(mysqli_num_rows($run_query)>0){
        header("location:welcome.php");
    }else{
        echo "<h3>Invalid Credentials!</h3>";
    }
}
?>

<?php

if(isset($_POST['backbtn'])){
    header("location:Homepage.php");
}
?>