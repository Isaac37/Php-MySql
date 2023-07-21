<?php include 'includes/header.php' ?>
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