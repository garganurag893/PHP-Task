<?php
 
$server="127.0.0.1";
$username="root";
$password="goldtree9";
$db="todo_database";

$conn= new mysqli($server,$username,$password,$db);
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
function Validate($formData){
        $formData=trim(stripslashes(htmlspecialchars($formData)));
        return $formData;
    }
if(isset($_POST["add"]))
{
    if($_POST["task"]){
        $finaltask=Validate($_POST["task"]);
        $insert_query = "INSERT INTO `todo_table` (`Id`, `Task_Name`, `status`) VALUES (NULL, '$finaltask',0);";
        if(mysqli_query($conn,$insert_query)){
        }
        else{
            echo"ERROR";
        }
    }
}
if(isset($_POST["del"]))
{
    $deltask=Validate($_POST["taskdel"]);
        $delete_query = "DELETE FROM `todo_table` WHERE `Id` = '$deltask';";
        if(mysqli_query($conn,$delete_query)){
        }
        else{
            echo"ERROR";
        }
}
if(isset($_POST["markdone"]))
{
    $deltask=Validate($_POST["taskdel"]);
        $update_query = "UPDATE `todo_table` SET `status`= '1' WHERE `Id`='$deltask';";
        if(mysqli_query($conn,$update_query)){
        }
        else{
            echo"ERROR";
        }
}
if(isset($_POST["markundone"]))
{
    $deltask=Validate($_POST["taskdel"]);
        $update_query = "UPDATE `todo_table` SET `status`= '0' WHERE `Id`='$deltask';";
        if(mysqli_query($conn,$update_query)){
        }
        else{
            echo"ERROR";
        }
}
?>
<?php 
$query = "Select * from todo_table";
$result=mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Todo List</title>
	<link rel="stylesheet" type="text/css" href="assets/css/todos.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css">
	<script type="text/javascript" src="assets/js/lib/jquery-2.1.4.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div id="container">
	<h1>To-Do List <i class="fa fa-plus"></i></h1>
    <form class="text-center"method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <textarea name="task" placeholder="Add New Todo"></textarea>
        <br>
        <button type="submit" name="add" class="btn btn-outline-primary">Add new task</button>
        <br>
        <br>
    </form>
         <?php
        if(mysqli_num_rows($result)>0)
        {
            echo"<ul>";
            while($row=mysqli_fetch_assoc($result))
            {
                echo "<li "; if($row["status"]==1)
        {
            echo "style='text-decoration-line: line-through;'";
        }
        else{
            echo "style='text-decoration-line: none;'";
        }echo "class='text-center'>" . $row["Task_Name"] . "</li><form class='text-center'method='post' action='" . htmlspecialchars($_SERVER['PHP_SELF']) . "' >
        <input type='text' style='display:none;' name='taskdel' value='" . $row['Id'] . "'>
        <button type='submit' name='del' class='btn btn-outline-primary'>Delete</button>
        <button type='submit' name='markdone' class='btn btn-outline-primary'>Mark Done</button>
        <button type='submit' name='markundone' class='btn btn-outline-primary'>Mark UnDone</button>
    </form>";
            }
            echo"</ul>";
        }
        else{
            echo"<br>Empty List<br>";
            }
        mysqli_close($conn);
        ?>
    <div class='text-center'>
    <a style="margin-bottom:20px;"class="btn btn-outline-primary bt-large" href="remove.php">Empty List</a>
    </div>
</div>
<script>

</script>
<script type="text/javascript" src="assets/js/todos.js"></script>
</body>
</html>