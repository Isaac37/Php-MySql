<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Manipulation</title>
</head>

<body>
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