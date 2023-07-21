<?php
$title = 'While Loop';
include 'includes/header.php' ?>
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
<?php require 'includes/footer.php' ?>