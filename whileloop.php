<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While/ Do While Loops</title>
</head>
<body>
<h1>While Loop</h1>
    <?php
    $grade = 0;
    //This is an infinite loop
    // while ($grade <= 10) {
    //    echo '<p>I am less tha 10: '.$grade.'</p>';
    // }

// Pre-Condition Loop

    while ($grade < 10) {
       echo '<p>I am less tha 10: '.$grade.'</p>';
       $grade++;
    }
    echo 'Loop exited';

    ?>

    <h1>Do while</h1>
    <?php
    //Pre-Condition Loop
        do {
            echo '<p>Hello World</p>';
        } while ($grade < 10);
    ?>
</body>
</html>