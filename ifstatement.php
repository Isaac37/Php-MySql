<?php include 'includes/header.php' ?>
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