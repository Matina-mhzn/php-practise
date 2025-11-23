<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //indexed array (normal array,index bata access garna milne)
            $fruits= array("apple","banana","strawberry","pineapple");
            // // echo $fruits[3];  //helps to access any one element of an array
            // // echo "<br>";
            // // array_splice($fruits,1,1);//remove an array

            // unset($fruits[2]);//removes but leaves a gap
            array_pop($fruits);//removes last ko item
            // array_shift($fruits);//removes first item
            // array_unshift($fruits);//adds in first


            // // // $fruits[1]="coconut";  //to change the element of an array
            // foreach($fruits as $f){
            //     echo "$f<br>";
            // }

            // // array_push($fruits,"mewa"); //used to add another item which goes at the end
            // // foreach($fruits as $f){
            // //     echo "$f <br>";
            // // }
            // // echo "<br>";

            array_splice($fruits,3,0,"watermelon"); //add item in middle
            foreach($fruits as $f){
                echo "$f <br>";
            }
            var_dump ($fruits);


        // //associative array (arrow wala array, uses keys ad values)
        //     $clothes=["size"=>"XL", "color"=>"red", "brand"=>"adidas"];
        //     foreach($clothes as $c){
        //         echo "$c <br>";
        //     }
        // //     // var_dump($clothes);
        // //     echo $clothes["color"];
        // $newarray=array_diff($clothes,["red"]); //removes and adds in new array


        //sorting of arrayyysss
        // $colors = array("red", "blue", "green");
        // sort($colors);//assending order num alphabet jun vayene
        // rsort($colors);//desending order



        // $price = array("panipuri"=>"60", "chatpate"=>"50", "icecream"=>"90");
        // asort($price);//accending order of value
        // ksort($price);//accesending order of key
        // arsort($price);//descending order of value
        // krsort($price);//descendeing order of key






        //multidimentional array
            $clothes= array (
            array("tshirt",22,18),
            array("pant",15,13),
            array("frock",5,2),
            array("socks",17,15),
            );


            // echo $clothes[0][0].": In stock: ".$clothes[0][1].", sold: ".$clothes[0][2].".<br>";
            // echo $clothes[1][0].": In stock: ".$clothes[1][1].", sold: ".$clothes[1][2].".<br>";
            // echo $clothes[2][0].": In stock: ".$clothes[2][1].", sold: ".$clothes[2][2].".<br>";
            // echo $clothes[3][0].": In stock: ".$clothes[3][1].", sold: ".$clothes[3][2].".<br>";

            for ($row = 0; $row < 4; $row++) {
                $variable = $row+1;
            echo "<p><b>Row number $variable</b></p>";
            echo "<ol>";
                for ($col = 0; $col < 3; $col++) {
                echo "<li>".$clothes[$row][$col]."</li>";
                }
            echo "</ol>";
            }





    ?>
</body>
</html>