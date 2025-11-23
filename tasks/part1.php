<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    1) Taking 2 numbers and calculation
    <br>
     <form action="" method="post">
         Enter a number: <input type="number" name="num1" require><br><br>
         Enter a number: <input type="number" name="num2" require><br><br>
         <button type="submit" name="calculate">Calculate</button><br>
    </form>

    <?php
        if(isset($_POST["calculate"])){
            $a=$_POST["num1"];
            $b=$_POST["num2"];

            echo "<h3>Result</h3>";
            echo "Addition:". ($a+$b)."<br>";
            echo "Subtraction:". ($a-$b)."<br>";
            echo "Multiplication:". ($a*$b). "<br>";

            if($b==0){
                echo "Cannot divide by zero";
            }
            else{
                echo "Divide:". ($a/$b). "<br>";
            }
        }
        
    ?>
    <br>
    <hr>
    2) To check odd or even
    <form action="" method="post">
        <br>
        Enter a number: <input type="number" name="num" id=""><br><br>  
        <button type="submit" name="calculate">Calculate</button>
    </form>
    <?php
        if(isset($_POST["calculate"])){
           $a=$_POST["num"];
        
           if($a%2==0){
            echo "It is a even number";
        }
            else{
              echo "It is a odd number";
            }
        }
    ?>


    


  
</body>
</html>