<?php
require_once("includes/db.php");

if($_GET['delete'])
{
    $getID = $_GET['delete'];
    $del_query = "DELETE FROM task_table WHERE id =$getID ";
    $del_result = mysqli_query($con, $del_query);

 if(!$del_query)
 {
        echo "Error";
 }
 else
{
    header("Location:index.php");
}
}
