<?php include 'includes/header.php' ?>
    <h1>String Manipulation</h1>
    <?php
         $phrase1 = "Hello world";
         $phrase2 = "helooooo";
         $name = "isaac kumbula";

         echo '<hr/>'; 
         echo $phrase1 . " " . $phrase2;
         echo '<br/>';
         echo ucfirst($name);
         echo '<br/>';
         echo ucwords($name);
         echo '<br/>';
         echo strtoupper($name);
         echo '<hr/>'; 
         echo strlen($name);
    ?>

</body>

</html>