<?php 

file_put_contents("mydata.txt", $_POST['task'] ,FILE_APPEND);

 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Php test 6</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="jumbotron jumbotron-fluid bg-dark text-center">
        <div class="container">
            <h1 class="font-weight-light text-white">Sixth Activity Of PHP</h1>
        </div>
    </div>
    <div class="container text-center">
       <p><?php echo file_get_contents("mydata.txt"); ?></p>
    </div>
</body>
</html>