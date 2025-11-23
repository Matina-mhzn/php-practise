<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    3) Grading marks
    <form action="" method="post">
        <br>
        Enter the marks: <input type="number" name="marks" id="" max="100"> <br><br>
        <button type="submit" name="calculate">Calculate</button>
        <br>
        <br>
    </form>
    <?php
        if(isset($_POST["calculate"])){
            $a=$_POST["marks"];

            if($a>=80){
                echo "Wau! You have scored A.";
            }
            elseif($a>=70){
                echo "Wau! You have scored B.";
            }
            elseif($a>=40){
                echo "You have scored C. Try harder.";
            }
            else{
                echo "Opps! You have failed.";
            }
        }
    ?>

    4) Print multiplication table
        <form action="" method="post">
        <br>
            Table of: <input type="number" name="table" id=""><br><br>
            <button type="submit" name="submit">Submit</button><br><br>
            
        </form>
            
            <?php
            if(isset($_POST["submit"])){
                $n=$_POST["table"];
                for($i=1; $i<=10; $i++){
                    $result=$i*$n;
                    echo "$result"."<br>";
                }
            }
        ?>

    5) Sum of numbers
            <?php
            $sum=0;
                for($i=1;$i<=50;$i++){
                    $sum=$i+$sum;
                }
                    echo "$sum"; 
            ?>
</body>
</html>