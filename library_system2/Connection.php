<?php

$conn=mysqli_connect('localhost','root','','library_system2');

if($conn){
    // echo "Connected Successfully!";
}

else{
    echo "Not Connected ! Technical issue!!";
}
?>