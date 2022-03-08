<html>
<head><title>Calculation Result</title></head>
<body>
    <?php
       
       $result = "";

        # test if input is_numeric
        if(!is_numeric($_POST['val1'] && $_POST['val2'])){
            
            $val1 = htmlentities($_POST['val1']);
            $val2 = htmlentities($_POST['val2']);

            # test if calc is not null
            if(!is_null($_POST['calc'])){

                $calc = htmlentities($_POST['calc']);

                # switch statement for value of calc
                switch($calc)
                {
                    case "add":
                    $result = $val1 + $val2;
                    break;

                    case "sub":
                    $result = $val1 - $val2;
                    break;

                    case "mul":
                    $result = $val1 * $val2;
                    break;

                    case "div":
                    $result = $val1 / $val2;
                    break;        
                }
                echo "Calculation result: $result";
            }
        }
        else{ echo "Invalid entry - please retry"; }
    ?>
</body>
</html>