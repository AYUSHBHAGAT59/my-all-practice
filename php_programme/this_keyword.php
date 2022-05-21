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
    // // 1st method to change this value is :
    // class demo{
    //     public $var1 = "my name is ayus bhagat";
    // }
    // $obj = new demo();
    // echo $obj -> var1."<hr />";
    // echo $obj -> var1 = "Im a programmer";


    // this is second method to change this value is :
    class demo {
        public $var1 = "my name is ayus bhagat";
        public function myfun($any_name) {
            $this -> var1 = $any_name;
            echo "<b>thi is new name ie: </b>".$this -> var1."<hr />";
        }
    }
    $obj = new demo();
    echo $obj -> var1."<hr />";
    echo $obj -> myfun('Im a programmer');
    ?>
</body>
</html>