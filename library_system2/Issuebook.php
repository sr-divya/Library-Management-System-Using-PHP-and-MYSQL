<?php

include('Connection.php');
error_reporting(0);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        /* .div2{
            box-sizing: border-box;
        } */
        h1{
            font-size: 40px;
            font-weight: bolder;
            text-align: center;
            color: white;
            background-color: black;
        }

        .div1{
            background-color: rgb(89, 215, 211);
            height: 550px;
            width: 800px;
            margin-left: 40px;
            margin-top: 80px;
        }

        form{
            padding-left: 220px;
        }

        h2{
            text-decoration: underline;
        }

        body{
            background-image: url('image/lib3.jpg');
            background-size: cover;
        }

        label{
            font-weight: bolder;
            font-family: Arial, Helvetica, sans-serif;
        }

        input{
            height: 30px;
            width: 250px;
            border-radius: 10px;
            border: none;
        }

        input[type='submit']{
            width: 120px;
            border-radius: 10px;
        }

    </style>
     <title>Issuing Book</title>
</head>
<body>
    <div class="div1">
        <div class="div2">
            <h1><i>Issue Books To Students</i></h1>

        </div>

        <form action="" method="post">
            <h2><i> Kindy Fill Out Students Details:</i></h2>

            <label>Student Name:&ensp;</label>
            <input type="text" name="sname" id=""><br><br>

            <label>Student RegNo:</label>
            <input type="text" name="sregno" id=""><br><br>

            <label>Student Course:</label>
            <select name="scourse">
                <option value="Course">Choose Course</option>
                <option value="BBA">BBA</option>
                <option value="BCA">BCA</option>
                <option value="E.Com">E.Com</option>
              </select>
            <br><br>

            <label>Book Title:&ensp;&ensp;&ensp;&ensp;</label>
            <input type="text" name="btitle" id=""><br><br>

            <label>Book ISBN:&ensp;&ensp;&ensp;</label>
            <input type="text" name="bisbn" id=""><br><br>

            <label>Issue Date:&ensp;&ensp;&ensp;&ensp;</label>
            <input type="date" name="idate" id=""><br><br>

            <label>Return Date:&ensp;&ensp;&ensp;</label>
            <input type="date" name="rdate" id=""><br><br>

            <input type="submit" name="issuebtn" value="Issue">

            <input type="submit" name="backbtn" value="Back">
        </form>

    </div>
    
</body>
</html>

<?php

$Sname=$_POST['sname'];
$Sregno=$_POST['sregno'];
$Scourse=$_POST['scourse'];
$Btitle=$_POST['btitle'];
$Bisbn=$_POST['bisbn'];
$Idate=$_POST['idate'];
$Rdate=$_POST['rdate'];

if(isset($_POST['issuebtn'])){

    $query="insert into `issue_record`(Std_name,Std_regno,Std_Course,Book_Title,Book_ISBN,Issued_Date,Return_Date) values ('$Sname','$Sregno','$Scourse','$Btitle','$Bisbn','$Idate','$Rdate')";

    $run_query=mysqli_query($conn,$query);

    if($run_query){
        
            $query1="select * from `book_details` where Title like '%$Btitle%'";
        
            $run_query1=mysqli_query($conn,$query1);
            // $count=mysqli_num_rows($run_query);
            if(mysqli_num_rows($run_query1)>0){
        
                $q="DELETE FROM `book_details` WHERE Title = '$Btitle'";
        
                $result=mysqli_query($conn,$q);
        
                if($result){
                    echo "<h2>Book Details Deleted Successfully!</h2>";
                    
                }else{
                    echo "Error!";
                }
            }
        // echo "<h2>Book Issued Successfully!</h2>";
    }
    else{
        echo "Error!";
    }
}
?>

<?php

if(isset($_POST['backbtn'])){

    header("location:Dashboard.php");
}
?>