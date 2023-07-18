<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Statement</title>
</head>
<body>
<h2>Switch Statement</h2>
    <?php
$grade = 'C';

switch ($grade) {
    case 'A':
       echo '<h3 style ="color:green">You have Passed</h3>';
        break;
    case 'B':
       echo '<h3 style ="color:green">You have Passed</h3>';
        break;
    
    default:
    echo '<h3 style ="color:RED">You have FAILED</h3>';
        break;
}
    ?>
</body>
</html>