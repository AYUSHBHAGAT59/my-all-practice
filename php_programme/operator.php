<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //operator in php
    //1. assignment operator
    //2. comparison operator
    // 3. logical operator
    // 4. arithmetic operator

    //1. assignment operator
    $a = 10;
    $b = 50;
    $c;
    
    $c=$a;
    echo "the value of c are" .$c."<br>";

    $c += 50;
    echo "the value of c is " . $c."<br>";


    $c -= 50;
    echo "the - of c is " . $c."<br>";

    $c *= 50;
    echo "the value of c is " . $c."<br>";

    $c /= 50;
    echo "the / of c is " . $c."<br>";

    $c %= 50;
    echo "the modulus(%) of c is " . $c."<br>";

    $c **= 50;
    echo "the raise to of c is " . $c."<br>";
    echo "hello world";

    //2. comparison operator
    echo "the value of a and b are";
    var_dump($a == $b)."<br>";
    echo "<br>";

    echo var_dump($a === $b)."<br>";

   $c =  $a < $b;
   echo $c."<br>";

   $c =  $a >= $b;
   echo var_dump($c)."<br>";

   $c= $a <> $b; //instant of <> we can you !=
   echo $c."<br>";

   $c= $a <=> $b;
   echo $c;

   $c= $a !== $b; 
   echo $c."<br>";

   $c= $a != $b; //instant of <> we can you !=
   echo $c."<br>";


//    3. logocal operator

// 3types of logical operators:
// 1 AND Operator (&&)
// 2 OR Operator (||)
// 3 NOT Operator (!,<>)

    if ($a < $b || $b > $a) {
        # code...
        echo "this is true";
    }
    elseif ($a == $b && $a >= $b) {
        # code...
        echo "this is gretest";
    }
    else {
        echo "this is false";
    }

    // function(){
    //     $rohan = 99;
    //     $mahesh = 100;
    //     $ayush = 55;
    //     $savio = 66;
    //     $karan = 77;
    //      if (marks >55) {
    //          # code...
    //          echo "all are pass";
    //      }
    //      else{
    //          echo "some are pass";
    //      }
    // }
    ?>
</body>
</html>