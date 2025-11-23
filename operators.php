<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    //to check weather the num is finite or not
    $x=1.9e411;
    var_dump(is_finite($x));
    var_dump(is_bool($x));

    echo "<br>";

    //NaN (invalid calculation)
    
    $x = acos(8);
    var_dump($x);

    echo "<br>";

    //PHP casting   
    $a=74848;
    $b=(string)$a;
    var_dump($b);

    echo "<br>";

    //pi
    echo (pi()-1);

    echo "<br>";

    //min and max function
    echo(min(120, 12, 4, 778 ));
    echo "<br>";
    echo(max(23,45,8765,876,4));
    
    echo "<br>";

    //absolute(turns into positive)
    echo(abs(-78));

    echo "<br>";

    //squareroot
    echo(sqrt(81));

    echo "<br>";

    //round off
    echo(round(0.68));
    echo "<br>";
    echo(round(0.34));

    echo "<br>";

    //random numbers
    echo (rand(0,100));
    echo "<br>";

    //constant
    define("HELLO","welcome home");
    echo(HELLO);
    echo "<br>";

    const bye="go back";
    echo bye;
    echo "<br>";

    define("cars",[
        "toyota",
        "bmw",
        "ford"
    ]);
    echo cars [1];

    #constants are global
    echo "<br>";

    //magic constants   
    echo __DIR__;
    echo "<br>";
    echo __FILE__;
    echo "<br>";

    //operators
    //1)Arithmetic Operators
    $num1=3;
    $num2=5;
    echo $num1+$num2;
    echo "<br>";

    echo $num1-$num2;
    echo "<br>";

    echo $num1*$num2;
    echo "<br>";

    echo $num1/$num2;
    echo "<br>";

    echo $num1%$num2;
    echo "<br>";

    echo $num1**2;
    echo "<br>";

    //2)Assignment Operators
    $a=3;
    echo $a;
    echo "<br>";

    $a+=2;
    echo $a;
    echo "<br>";

    $a-=2;
    echo $a;
    echo "<br>";

    $a*=2;
    echo $a;
    echo "<br>";

    $a/=2;
    echo $a;
    echo "<br>";

    $a%=2;
    echo $a;
    echo "<br>";
   
    //conparision operators
    $p=5;
    $q=2;
    var_dump($p==$q);//returns true when value is true(equal)
    echo "<br>";
    var_dump($p===$q);//returns trus when the value and type are true(identical )
    echo "<br>";
    var_dump($p!=$q);//returns true if the value is false(not equal)
    echo "<br>";
    var_dump($x <> $y); //not equal another form
    echo "<br>";
    var_dump($x !== $y); //returns true if they are not equal or their types(not identical)
    //greater than equal to less equal to...
    echo "<br>";
    echo($p<=>$q);//spaceship-returns 1,0,-1 is acc to the values  //  returns 1 because p is greater than q 
    echo "<br>"

    //Increment and decrement
    //pre post increment decrement

    //logical operator
    //-






    ?>
</body>
</html>