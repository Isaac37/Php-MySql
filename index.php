<?php 
$title = 'index';
include 'includes/header.php' ?>
<h1>Hello World</h1>
<?php
        echo'Hello php';
        ?>

<?php
        $name = 'Isaac';
        $age = 5;
        echo '<br/>';
        echo $name;
        echo'<h1> My Name is:'.$name.' </h1>';
        // echo '<br/>'; 
        echo'<h1> My Age is:'.$age.' </h1>';
        ?>

<?php require 'includes/footer.php' ?>

