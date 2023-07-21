<?php 
$title = 'Switch Statement';
include 'includes/header.php' ?>
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