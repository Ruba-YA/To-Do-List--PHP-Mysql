<?php
require_once("includes/db.php");
if(isset($_GET['edit']))
{

    $editID = $_GET['edit'];
if (isset($_POST['edit-task'])) {
    $task_title = $_POST['task_title'];
        $edit_query = "UPDATE task_table SET task_name = '$task_title' WHERE id =$editID ";
        $edit_result = mysqli_query($con, $edit_query);
        if(!$edit_result)
        {
            echo "ERror";
        }
        else
        {
            header("Location:index.php");
        }
}

}

?>

<div class="container">
    <link rel="stylesheet" href="style.css">
    <script src="js.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <form action="" method="post">
  
        <div class="form">
        <?php
   $sel_query = "SELECT * FROM task_table WHERE id =  $editID";
   $sel_result = mysqli_query($con, $sel_query);
   while ($row = mysqli_fetch_assoc($sel_result))
   {
       $task_id = $row['id'];
       $task_title = $row['task_name'];
 
}?>
            <input value="<?php echo $task_title;?>" name="task_title" type="text" class="input" />
            <input va type="submit" class="add" name="edit-task" value="Edit Task" />
        </div>
   
        </form>
     
        
        <div class='tasks'> 
        
      
        <?php
        echo $task_title;
        ?>

        </div>
  