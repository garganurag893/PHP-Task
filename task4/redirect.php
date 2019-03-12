<?php
session_start();
?>
<?php 
       session_unset();
       session_destroy();
    echo"You have done it";
?>
