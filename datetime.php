<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date time manipulation</title>
</head>
<body>
    <h1>Date time manipulation</h1>

    <?php
    $datenow = getdate();
        echo "<p>$datenow[mday]</p>";
        echo "<p>$datenow[mon]</p>";
        echo "<p>$datenow[year]</p>";
        echo "<p>$datenow[year]</p>";


        echo "Today's date is:" . "$datenow[mday]" . 
        "/" . "$datenow[mon]" . "/" . "$datenow[year]" ;
        echo "<br/>";
        echo time();
        echo "<br/>";
        print date( "m/d/y G.i:s<br>", time()) . '<br/>';
        echo "<br/>";
        print date("j of F Y, \a\\t g.i a", time());

       
    ?>
    
</body>
</html>