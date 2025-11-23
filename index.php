<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>byeee</h1>
    <?php
       $a=3;
       $b=10;
       echo $a+$b;

       $text="have a good day";
       
       echo "hello $text <br>";
       var_dump($a);
       var_dump("helo");



        $x=20;
        $y=10;
        function test(){
            global $x, $y;
            $y=$x+$y;
        }
        test();
        echo $y;

        print"hello";

       ?>
</body>
</html>