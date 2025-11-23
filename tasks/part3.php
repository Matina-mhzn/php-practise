<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $array=["apple","ball","cat","snake","mop","sun","sugar"];
    foreach($array as $f){
        // echo "$f"."<br>";
        echo "<br>";
        if($f[0]=="s"){
            echo "$f"."<br>";
        }
    }

    ?>

    <?php
    $numbers=[1,3,4,6,7,8];
    $largest=max($numbers);
    $smallest=min($numbers);
    echo "$largest";
    echo "$smallest";   

    $sum=array_sum($numbers);
    $count=count($numbers);
    $average=$sum/$count;
    echo "$average";
    ?>
</body>
</html>