<?php

include('Connection.php');
// error_reporting(0);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .div1{
            margin: 100px 300px;
            /* height: 200px; */
            width: 500px;
            /* background-color: rgb(177, 92, 226); */
            padding: 100px 150px;
            border-radius: 50px;
        }

        input{
            height: 40px;
            width: 400px;
            border-radius: 10px;
        }

        input[type='submit']{
            width: 100px;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
            background-color: rgb(59, 54, 54);
            font-weight: bolder;
        }

        label{
            font-size: 25px;
            font-weight: bolder;

        }

        body{
            background-image: url('image/lib1.jpg');
            background-size: cover;
        }
    </style>
    
    <title>Remove Books</title>
</head>
<body>
    <div class="div1">
        <form action="" method="post">
            <label>Enter the title of book:</label>
            <input type="text" name="btitle" ><br><br>
            <input type="submit" name="deletebtn" value="Delete">
            <input type="submit" name="backbtn" value="Back">
        </form>

    </div>
    
</body>
</html>

<?php


if(isset($_POST['deletebtn'])){
    $Booktitle=$_POST['btitle'];
    $query="select * from `book_details` where Title like '%$Booktitle%'";

    $run_query=mysqli_query($conn,$query);
    // $count=mysqli_num_rows($run_query);
    if(mysqli_num_rows($run_query)>0){

        $q="DELETE FROM `book_details` WHERE Title = '$Booktitle'";

        $result=mysqli_query($conn,$q);

        if($result){
            echo "<h2>Book Details Deleted Successfully!</h2>";
            
        }else{
            echo "Error!";
        }
    }else{
        echo "<h2>No Such book is present in Library</h2>";
    }
}
?>

<?php

if(isset($_POST['backbtn'])){
    header("location:Dashboard.php");
}
?>