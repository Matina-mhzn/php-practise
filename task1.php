<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task1</title>
</head>
<body>
    <?php
    //program to check even or odd
    // $num1=3;
    // if($num1%2==0){
    //     echo "The num is even";
    // }
    // else{
    //     echo "The num is odd";
    // }

    // echo "<br>";

    // //program to check positice or negative
    // $number=0;
    // if($number>0){
    //     echo "The number is positive";
    // }
    // else if($number<0){
    //     echo "The number is negative";
    // }
    // else{
    //     echo "It is neutral";
    // }

    // echo "<br>";

    // //program to check if a person is eligible to vote
    // $age=13;
    // if($age>=18){
    //     echo "You are eligible to vote";
    // }
    // else{
    //     echo "You are not eligible to vote";
    // }

    // echo "<br>";

    // //program to check weather a num can be divided by 5 and 11 or not
    // $num=5;
    // if($num/5 && $num/11){              
    //     echo "the number is divisible by 5 and 11";
    // }
    // else{
    //     echo "the number is not divivsible by 5 and 11";
    // }

    // echo "<br>";

    // //program to check weather a given year is leap year or not
    // $year=400;
    // if($year%4==0){
    //     echo "it is a leap year";
    // }
    // elseif($year%100==0){
    //     echo "not a leap year";
    // }
    // else if($year%400==0){
    //     echo "it is a leap year";
    // }
    // else{
    //     echo "not a leap year";
    // }




    //for loop
    //1)print num from 1 to 10
    for($a=1; $a<=10; $a++){
        echo "$a";
    }

    //2)multiplication of a number
    for($b=1; $b<=10; $b++){
        $result=2*$b;
        echo "<br>"; 
        echo "$result";
    }

    //while loop
    //1)to print the even numbers 1-20
        echo "<br>";
        echo "<br>";


        $c=2;
        while($c<=20){
        echo "$c";
        $c+=2;
        echo "<br>";
    }
    
        echo "<br>";
        echo "<br>";

    //2)sum of natural numbers from 1 to n 
       $n=10;
       $sum=0;
       $d=1;
        while($d<=$n){
            $sum=$sum+$d;
            $d++;
        }
        echo "$sum";
    echo "<br>";
    echo "<br>";

    //do-while loop
    //1)print numbers from 1 to 5 
        $i=1;
        do{
            echo "$i";
            $i++;
        }while($i<6);
                echo "<br>";

    //2)asks for a password and keeps asking until the correct password is entered 
        $passcode="12345";
        do{
            $enteredpw="12345";
             if($enteredpw!==$passcode){
                echo "Incorrect passcode!!Try again";
             }
            
        }while($enteredpw!==$passcode);

        echo "Welcome";
        
        echo "<br>";

    //for each 
    //1)print all elements of an array 
        $fruits=array("apple","babanaa","orange","mango");
        foreach ($fruits as $f){
            echo "$f <br>";
        }

    //2)sum of arrays
        $sum=0;
        $numbers=array(1,2,3,4,5);
        foreach($numbers as $x){
            $sum=$sum+$x;

        }
        echo"$sum";

        ?>


</body>
</html>