<?php
require_once("includes/db.php");

if(isset($_POST['add_task']))
{
    $task_title = $_POST['task_title'];
    $query = "INSERT INTO task_table(task_name) VALUES ('$task_title')";
    $result = mysqli_query($con, $query);
    if($result)
    {
        echo "";
    }
    else
    {
        echo "Error";
    }
}



?>

<div class="container">
    <link rel="stylesheet" href="style.css">
    <script src="js.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <form action="" method="post">
        <div class="form">
            <input name="task_title" type="text" class="input" />
            <input type="submit" class="add" name="add_task" value="Add Task" />
        </div>
        </form>
        <?php
            $sel_query = "SELECT * FROM task_table";
            $sel_result = mysqli_query($con, $sel_query);
            while ($row = mysqli_fetch_assoc($sel_result))
            {
                $task_id = $row['id'];
                $task_title = $row['task_name'];
            echo "
        
        <div class='tasks'> 
        <a href='delete.php?delete=$task_id'> <button class='task'><img src='img/remove.png' height='30'></button></a> 
        <a href='edit-task.php?edit=$task_id'> <button class='taskk'><img src='img/edit.png' height='30'></button></a> 

        $task_title
        

        </div>";
    }

            
    ?>