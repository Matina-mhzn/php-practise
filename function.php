<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>function</title>
</head>
<body>
  <?php
    // //with parameter without return value
    //   function add($a,$b){
    //     echo "$a+$b";
    //   }
    //   add(4,2);

    // //with parameter with return value
    //   function subtract($a,$b){
    //     return $a-$b;
    //   }
    //   $sub=subtract(6,3);
    //   echo "$sub";

    // //without parameter with return value
    //   function multiply(){
    //     return 2*6;
    //   }
    //   $multi=multiply();
    //   echo "$multi";


    // //without parameter without return value
    //   function divide(){
    //     echo "6/2";
    //   }


    //   //default argument (when argument not given)
    //   function division($a,$b=2){
    //     echo "$a/$b";
    //   }
    //   division(4);
      

      //loop inside function
      #hw
      // 1) Sum of n natural numbers(while loop)

      // function sum($num){
      //   $i=1;
      //   $result=0;
      //   while($i<=$num){
      //     $result=$i+$result;
      //     $i++;
      //   }
      //   echo "$result";
      // }
      // sum(10);
      // echo "<br>";
      
      // 2) To print the natural numbers(for loop)
      // function naturalnum($num){
      //   for($i=1;$i<=$num;$i++){
      //     echo "$i";
      //   }
      // }
      // naturalnum(10);
      // echo "<br>";

      // 3) To multiply (for loop)
        // function multiply($a){
        //   for($i=1;$i<=10;$i++){
        //     $result=$i*$a;
        //     echo "$result";
        //   }
        // }
        // multiply(2);

        // 4) even num upto
          // function even($a){
          //   $c=2;
          //   while($c<=$a){
          //     echo "$c";
          //     $c+=2;
          //   }
          // }
          // even(20);
      // echo "<br>";

          

          #odd number
      //       function odd($a){
      //         $c=1;
      //         while($c<=$a){
      //           echo "$c";
      //           $c+=2;
      //         }
      //       }
      //       odd(20);
      // // echo "<br>";

      //print num from 1 to n
      // function numbers($n){
      //       $i=1;
      //   do{
      //       echo "$i";
      //       $i++;
      //   }while($i<=$n);
      //           echo "<br>";
      // }
      // numbers(22);

      //check password
      // function password($enteredpw){
      //    $passcode="12345";
      //   do{
      //       $enteredpw="12345";
      //        if($enteredpw!==$passcode){
      //           echo "Incorrect passcode!!Try again";
      //        }
            
      //   }while($enteredpw!==$passcode);

      //   echo "Welcome!!";
      // }
      // password(12345);

      //to print arrays
    //   function printarrays($items){
    //     foreach($items as $f){
    //       echo "$f";
    //     }
    //   }
            
    //  $fruits=["aple","banana","grapes"];
    //  printarrays($fruits);

    //sum of arrays

    function sumofarrays($items){
      $sum=0;
      foreach($items as $f){
        $sum=$f+$sum;
      }
      echo "$sum";
    }
    $fruits=[1,3,4];
    sumofarrays($fruits);

  ?>
</body>
</html>