<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Thursday in a Week.</title>
</head>
<body>
    <fieldset style = 'width: 20rem'>
                <legend>Checking Week Name</legend>
                <form method = 'POST'>
                    <label>Week Name :</lebal>
                    <input type = 'number' name = 'weekname'>
                    <input type = 'submit' name = 'submit'>

                </form><hr>

                    
<?php
    $day = $_POST['weekname'];

    switch($day){
            case '1':
                echo"This is MONDAY..";
                echo"This is not THURSDAY..";
                break;
        
            case '2':
                echo"This is TUESDAY..";
                echo"This is not THURSDAY..";
                break;
        
            case '3':
                echo"This is WEDNESDAY..";
                echo"This is not THURSDAY..";  
                break;
        
            case '4':
                echo"This is THURSDAY.. Yeepee";
                break;

            case '5':
                echo"This is FRIDAY..";
                echo"This is not THURSDAY..";  
                break;

            case '6':
                echo"This is SATURDAY..";
                echo"This is not THURSDAY..";  
                break;

            case '7':
                echo"This is SUNDAY..";
                echo"This is not THURSDAY..";  
                break;

            default:
             echo"Please Enter Valid Entry";
            }
?>


    </fieldset>            
</body>
</html>




