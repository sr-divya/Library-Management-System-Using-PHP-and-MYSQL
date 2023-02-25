<?php

error_reporting(0);
session_start();
if(!isset($_SESSION['user'])){
    header("location:Adminlogin.php");
}
include('Logout.php');
include('inc/header.php');

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .div1{
            margin: 100px 500px;
            /* background-color: rgb(82, 79, 79); */
            border-radius: 10px;
            

        }


        ul{
            list-style: none;
            display: inline-block;
            padding-left:150px ;
            padding-top: 10px;
        }

        button{
            height: 60px;
            width: 220px;
            border-radius: 10px;
            border: none;
            background-color:black;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bolder;
            font-size: 15px;
            
        }

        li{
            padding-top: 30px;
        }

        h1{
            color: white;
            font-size: 80px;
            padding-left:10px ;
            text-decoration: underline;
            font-family: serif;
        }
        body{
            background-image: url('image/library.avif');
            background-size: cover;
        }
        /* .btn button{
            background-color: rgb(57, 78, 94);
            height: 40px;
            width:180px;
            border: 2px solid white;
            margin-left: 1200px;
        } */

        
    </style>
    <title>Dashboard</title>
</head>
<body>
       <!-- <div class="btn">
                <button name='logoutbtn' onclick="window.location.href=('Logout.php')">LOG OUT</button>

            </div>      -->
    
    <div class="div1">
        <h1><i>Smart Library</i></h1>
        <ul>
            <li><button onclick="window.location.href=('Addbook.php')">ADD BOOKS</button></li>
            <li><button>EDIT BOOK DETAILS</button></li>
            <li><button onclick="window.location.href=('Issuebook.php')">ISSUE BOOK TO STUDENT</button></li>
            <li><button onclick="window.location.href=('Removebook.php')">REMOVE BOOKS</button></li>
            
        </ul>

    </div>
    
</body>
</html>

<?php

include('inc/footer.php');

?>