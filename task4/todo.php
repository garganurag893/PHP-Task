<?php 
session_start(); 
if(!isset($_SESSION['todoCollection']))
	$_SESSION['todoCollection'] = [];
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
    <form class="text-center"method="post" action="/storeitem.php">
        <textarea name="task" placeholder="Add New Todo"></textarea>
        <br>
        <button type="submit" class="btn btn-outline-primary">Add new task</button>
        <br>
        <br>
    </form>
	<ul>
        <?php 
            for($i = 0; $i < sizeof($_SESSION['todoCollection']); $i++) 
            { ?>
            <li style="padding-left:10px;"><?php echo $_SESSION['todoCollection'][$i]['caption']; ?></li>
	        <?php } ?>
	</ul>
    <a style="margin-left:110px;margin-bottom:20px;"class="btn btn-outline-primary bt-large" href="redirect.php">Destroy Session</a>
</div>

<script type="text/javascript" src="assets/js/todos.js"></script>
</body>
</html>