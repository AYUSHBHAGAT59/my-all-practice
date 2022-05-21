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
    // constructor and deconstructor functions
    // 1> pre-defined constructor function`
    // class demo{
    //     public $category = "E-learning";
    //     public $company = "Knowledge Of Tree"; 
         
    //     public function __construct(){
    //         echo "The Best Company Of ".$this -> category . "is ". $this -> company;
    //     }
    // }
    // $obj = new demo();

    // 2> parameterized constructor function

    // class demo{
    //     public $category = "E-learning";
    //     public $company = "Knowledge Of Tree";

    //     public function __construct($category, $company){
    //         $this -> category = $category;
    //         $this -> company = $company;

    //         echo "The Best ". $this -> category . " is ". $this -> company;
    //     }
    // }
    // $obj = new demo("<b>".'E-commerec Website','Shopify'."</b>");


    // destructor function

    class demo{
        public $category = "E-learning";
        public $company = "Knowledge Of Tree"; 

        public function testfun(){
            echo "<mark>This is testing function</mark><br>";
            // exit;
            die();
            echo "This is testing function after exit";
        }

        public function __destruct(){
            echo "The Best Company Of ".$this -> category . "is ". $this -> company;
        }
    }
    $obj = new demo();
    $obj -> testfun();
    ?>
</body>
</html>