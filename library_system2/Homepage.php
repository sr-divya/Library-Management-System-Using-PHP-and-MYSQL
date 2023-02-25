<?php

include('inc/header.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .div2{
            /* background-color:rgb(179, 117, 35) ; */
            margin-top: 0px;
            padding-top: 20px;
            padding-left: 50px;
            box-sizing: border-box;

        }
        
        .div1{
            /* background-color:rgb(179, 117, 35); */
            box-sizing: border-box;
            margin: 0px;
            
        }
        .div3{
            margin: 150px 400px;
            background-color: black;
        }

        ul{
            list-style: none;
            display: inline-flex;
            margin-left: 900px;
            margin-top: 10px;
        }
        
        li{
            
            padding-left: 30px;
            

        }

        button{
            padding: 8px 8px;
            font-size: 20px;
            border-radius: 10px;
            background-color: rgb(62, 51, 53);
            color: white;
        }

        button:hover{
            background-color: black;
            color: white;
        }

        h2{
            color: white;
            font-family: serif;
            font-size: 50px;
            text-decoration: underline;
        }

        h1{
            font-family: serif;
            font-size: 50px;
            color: white;
            padding: 10px 60px;
            border: 10px solid rgb(248, 208, 6);
        }

        body{
            /* background-color: cadetblue; */
            
        /* background-color: gray; */background-image: url('image/lib1.jpg');
            background-size: cover;
    }
        
    </style>
    
    <title>Homepage</title>
</head> 
 <body> 
    <div class="div1">
        <div class="div2">
            <h2><i>Smart Library </i></h2>

        </div>
        <ul>
            <li><button onclick="window.location.href=('Adminlogin.php')">Admin Login</button></li>
            <li><button onclick="window.location.href=('userlogin.php')">User Login</button></li>
            <li><button onclick="window.location.href=('usersignup.php')">User Sign Up</button></li>
        </ul>

    </div>

    <div class="div3">
        <h1><i>Welcome to Smart Library</i></h1>

    </div>
</body>
</html>

<?php

include('inc/footer.php');

?>