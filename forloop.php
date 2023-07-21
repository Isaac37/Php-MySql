<?php include 'includes/header.php' ?>
    <h1>For Loop</h1>

    <?php
        for ($count = 0; $count < 10; $count++) { 
            echo '<p>Hello world!!!</p>';
        }
        for ($count = 0; $count < 10; $count++) { 
            echo "<p>$count</p>";
        }
    ?>
</body>
</html>