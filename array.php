<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <h1>Arrays</h1>
    <?php
       $numbers = array(1,2,3,4,5,6);

       echo '<p>'.$numbers[1].'</p>';

       $size = count($numbers);

       echo "<p>Array number size is: $size</p>";

       for ($i=0; $i < $size; $i++) { 
        echo "<p>$numbers[$i]</p>";
       }

    ?>
    
</body>
</html>