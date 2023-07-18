<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tuto</title>
</head>

<body>
    <h2>Follow each link to the page example</h2>
  
    <ul>
        <li> <a href="array.php">Array Statement</a></li>
        <li> <a href="forloop.php">For Loop</a></li>
        <li> <a href="whileloop.php">While/ Do While Loop</a></li>
        <li> <a href="ifstatement.php">If statement</a></li>
        <li> <a href="switchstatement.php">Switch Statement</a></li>
        
    </ul>
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
</body>

</html>