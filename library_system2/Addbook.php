<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        h1{
            font-size:40px;
            color: white;
            text-align: center;
        }

        .div2{
            box-sizing: border-box;
            background-color: rgb(99, 90, 90);
            height: 50px;
        }

        /* .img{
            height: 800px;
            width: 800px;
            background-image: url('mikolaj-DCzpr09cTXY-unsplash.jpg');
            background-size: cover;
            float: right;
        } */

        label{
            color:white;
            font-size: 20px;
            font-weight: bolder;
            font-family: Arial, Helvetica, sans-serif;
        }

        input{
            height: 30px;
            width: 300px;
            border-radius: 10px;
        }

        .form{
            /* background-color: darkcyan; */
        }

        form{
            margin-left: 120px;
            padding-top: 200px;
        }

        input[type='submit']{
            height: 40px;
            width: 100px;
            border-radius: 10px;
            font-size: 15px;
            color: white;
            background-color: gray;
            font-weight: bolder;
            /* border: none; */
            margin-left: 50px;
        }

        body{
            background-image:url('image/mikolaj-DCzpr09cTXY-unsplash.jpg');
            background-size:cover;
        }

        h3{
            color:white;
            font-size:30px;
        }
        
    </style>
    <title>Add book</title>
</head>
<body>
    <div class="div1">
        <div class="div2">
            <h1>Add New Book</h1>
        </div>

        <div class="img">
           
        </div>

        <div class="form">
            <form action="" method="post">
               <label>Author:</label>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<input type="text" name="author" id=""><br><br>
               
               <label>Title:</label>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<input type="text" name="title" id=""><br><br>
               <label>Publications:</label><input type="text" name="publications" id=""><br><br>
               <label>ISBN:</label>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<input type="int" name="isbn" id=""><br><br>
               <input type="submit" name="insertbtn" value="Insert">
               <input type="submit" name="backbtn" value="Back">

            </form>
            

        </div>
    </div>
    
</body>
</html>

<?php

include('Connection.php');
error_reporting(0);

$Author=$_POST['author'];
$Title=$_POST['title'];
$Publications=$_POST['publications'];
$ISBN=$_POST['isbn'];


if(isset($_POST['insertbtn'])){
    if($Author=='' || $Title=='' || $Publications=='' || $ISBN==''){
        echo ("<h3>Fill All Fields!</h3>");
    }
    else{
        $query="insert into `book_details`(Author,Title,Publications,ISBN) values('$Author','$Title','$Publications','$ISBN')";

        $run_query=mysqli_query($conn,$query);

        if($run_query){
            echo "<h3>Book Details inserted Successfully!</h3>";
        }
        else{
            echo "Error issued!";
        }
}
}

?>

<?php

if(isset($_POST['backbtn'])){
    header("location:Dashboard.php");
}
?>