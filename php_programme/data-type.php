<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data type in php</title>
</head>
<body>
    <?php
    //data type in php
    /* 
    1. string
    2. integer
    3. boolean
    4. double 
    5. float
    6. array 
    7. null 
    8. object
    */

    // 1. string

    // $string01 = "<h1>this is a double couted string</h1>";
    // $string02 = '<h1>this is a single couted string</h1>';
    // echo "this is a $string01 and $string02";

    // 2. integer

    // $variable01 = 555;
    // $variable02 = 999;
    // $result = $variable01 + $variable02;
    // echo "the submition of $variable01 and $variable02 is: ";
    // echo $result;
    // echo var_dump($result);

    // 3. boolean
    // $variable01 = true;
    // $variable02 = false;
    // echo "this is a $variable01 and $variable02 <br/>";
    // //FOR PRINTING VAR 2 USE VAR_DUMP() FUNCTION
    // echo var_dump($variable01 , $variable02);

    // 4. double
    // in searching 

    // 5. float
    // $car = 99.999;
    // $car2 = 555.666;
    // echo var_dump($car, $car2);
    // echo $car + $car2;

    // 6. array
    // $students = array('student1', 'student2','students3','students4','students5','students6');
    // echo var_dump($students);
    // echo $students; //error message

    // 7.null
    // $var = null;
    // echo var_dump($var);
    // echo $var; //no message shown

    // 8. object

    // example 1: 

    // for creating object first we have to create class\
    //class:
    // class mobile{
    //   var $model; //GLOBAL variable
    //     function showModel($number){  //CREATING FUNCTION   
    //         global $model;      //CALLING GLOBAL VARIABLE 
    //         $model = $number;   //MATCHING  GLOBAL VARIABLE AND PARAMETER
    //         echo "mobile number is $model";
    //     }
    // }
    // // creating object
    // $samsung = new mobile; // THIS IS NEW OBJECT
    // $samsung->showModel("A8"); // ARROW FUNCTION CALL


    // example 2: 


    // class school{
    //     var $student;
    //     function showStudent ($number) {
    //         global $student;
    //         $student = $number;
    //         echo "the name of the studente is $student <br/>";
    //     }
    // }
    // //creating object
    // $parent = new school;
    // $parent -> showStudent("ayush bahagat");
    // //creating 2nd object  //second object can be same as parent object
    // $parent01 = new school;
    // $parent01 -> showStudent('soni bhagat');


    ?>
</body>
</html>