

<?php
                    if(isset($_POST['logoutbtn']))
                    {
                        unset($_SESSION['user']);
                        session_destroy();
                        header("location:Adminlogin.php");
                    }

                    
 ?>
 <style>
    .btn button{
            background-color: rgb(57, 78, 94);
            height: 40px;
            width:180px;
            border: 2px solid white;
            margin-left: 1200px;
        }
 </style>
<form method="post">
<div class="btn">
                <button name="logoutbtn">LOG OUT</button>

            </div> 
    </form>
            
 