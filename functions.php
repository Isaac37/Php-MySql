<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>

<body>
    <h1>Functions</h1>

    <?php
//defining a function
    function writeMessage(){
            echo 'Isaac';
    }

    //calling a function
         writeMessage();
         echo '<br/>';
//function with parameters
         function addNumber($num1, $num2){
            $sum = $num1 + $num2;
            echo "The sum of $num1 and $num2 is: $sum <br>";
         }
        $num = 100;
         addNumber(10, 20);
         addNumber($num, 200);


    ?>

</body>

</html>