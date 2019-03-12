<?php 
session_start();
if(isset($_POST['task'])){
array_push($_SESSION['todoCollection'], ['caption' => $_POST['task'], 'isCompleted' => false]);}
$_POST['task']=null;
 ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="assets/css/todos.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css">
	<script type="text/javascript" src="assets/js/lib/jquery-2.1.4.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="jumbotron jumbotron-fluid bg-dark text-center">
        <div class="container">
            <h1 class="font-weight-light text-white">Task added successfully</h1>
        </div>
        <a href="todo.php" class="btn btn-outline-primary">Go back to To-d0 List</a>
    </div>
</body>
</html>