<html>
<head><title>Your Favorite</title></head>
<body>
    <?php

        #First Name
        if(!empty($_POST['username']))
        {
            $username = htmlentities($_POST['username']);
            echo "Thank you for your selection " . $username . "<br>";
        }

        else { echo "First Name is EMPTY <br>"; } 

        #Favorite Dish
        if(!empty($_POST['dish']))
        {
            $dish = htmlentities($_POST['dish']);
            echo "You really enjoyed " . $dish . "<br>";
        } 

        else { echo "Favorite Dish is EMPTY <br>"; } 

        #Favorite Wine
        if(!empty($_POST['color']))
        {
            $color = htmlentities($_POST['color']);
            echo "- especially with a nice " . $color . " wine <br>";
        } 

        else { echo "Favorite Wine is EMPTY <br>"; }          
    ?>
</body>
</html>