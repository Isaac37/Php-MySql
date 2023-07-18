<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP If Statement</title>
</head>
<body>
<h2>PHP If Statement</h2>
    <?php
    echo"<h2>If Statement</h2>";
    $grade = 60;
    if ($grade >= 50) {
       echo'<h3 style ="color:green">You have Passed</h3>';
    }
    else {
        echo "<h3 style ='color:red'> You have failed</h3>";
    }
    $mark = 'l';
    if ($mark == 'A') {
       echo '<h3 style ="color:green">You have passed </h3>';
    }
    elseif ($mark == 'B') {
        echo '<h3 style ="color:green">You have fairly did ok </h3>';
    }
    else {
        echo '<h3 style ="color:red">You have failed </h3>';
    }
    ?>
</body>
</html>