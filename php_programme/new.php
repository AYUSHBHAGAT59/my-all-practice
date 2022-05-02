<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php tutorial</title>
</head>
<body>
    <div class="container">
        this is my first php website <br>
        php stand for: Hypertext Preprocessor <br>
        
        <?php
        echo "this is php code <br>" ;

        //variables in php
        $variable1 = 90;
        $variable2 = 110;
        echo  $variable1 , "<br>";
        echo  $variable2 , "<br>";

        //operators in php 
        // there are all 5 operators are there in php i.e:
        //1> assignment operators
        //2> arithmetic operators
        //3> increment and decrement operators
        //4> logical operator
        //5> comparison operator

        //1> arithmetic operators
        $firstname = 'ayush';
        $lastname = 'bhagat';
        echo $firstname ," ", $lastname,"<br>";
        echo "the addition of 1 and 2 variable is ", $variable1+$variable2 ,"<br>"; //plus
        echo "the subraction of 1 and 2 variable is ", $variable1-$variable2 ,"<br>"; //minus
        echo "the division of 1 and 2 variable is ", $variable1/$variable2 ,"<br>"; //divide
        echo "the multiplication of 1 and 2 variable is ", $variable1*$variable2 ,"<br>"; //multiply

        // 2> assignment operator
        $newvariable = $variable1;
        echo "this is new variable = ",$variable1, "<br>";
        echo 'adding 1 in new variable = ',$newvariable -=1;
        // $newvariable +=1;
        // $newvariable *=1;
        // $newvariable /=1;

        //3> comparison operators
        echo"<br>";
        $ayush = 55;
        $thing = 66;
        $answer = $ayush == $thing;
        echo"<br>";
        echo $answer;
        ?>

        <!-- <video src=""></video> -->
    </div>
</body>
</html>