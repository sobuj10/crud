<?php
include 'config.php';
if(isset($_GET['Del']))
         {
             $UserID = $_GET['Del'];
             $query = " delete from records where id = '".$UserID."'";
             $result = mysqli_query($conn,$query);
             if($result)
             {
                 header("location:view.php");
             }
             else
             {
                 echo ' Please Check Your Query ';
             }
        }
         else
         {
             header("location:view.php");
         }
?>