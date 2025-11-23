<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loop</title>
</head> 
<body>
    <?php
        //for loop
        /*for(initialization,condition,increment/decrement){
            statement
        }
        */
        for($x=0; $x<10; $x++){
            echo "my";
        }
        echo "<br>";

        //break statement
        //stop the loop when z=3

        for($z=0; $z<=10; $z++){
            if($z==3)break;
            echo "$z";
        }

        echo "<br>";

        //continue statement
         for($z=0; $z<=10; $z++){
            if($z==3)continue;
            echo "$z";
        }     
        
        echo "<br>";
        
        //while loop
        /*
            (initiazilation);
            while(condition){
            statement
            increment/decrement;
            }

        */

      for($b=1; $b<=10; $b++){
        $result=2*$b;
        echo "<br>"; 
        echo "$result";
    }






    ?>
</body>
</html>