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
    // how to make classes in php
    // public,
    // private,
    // protected . // this all are visibility or we can say it is access specifier
    class car{
        public $color = 'red'."<br />";

        public $car_info = [
            'brand' => 'skoda',
            'model' => 'octavia',
            'color' => 'black',
            'music_type' => 'jbl',
            'wheel' =>  'alloy'
        ];
        public function testFunction($default){
            echo $default;
        }
        public function arrayfunctions($array){
            foreach ($array as $key => $value) {
                # code...
                echo $key . ' : ' . $value . '<br>';
            }
        }
    }
    //  object properties ( -> )
    $obj = new car();
    echo $obj-> color;
    // printing parameters
    echo $obj-> testFunction('Hii My Name Is Ayush Bhagat'.'<br />');
    // printing object

        echo $obj->arrayfunctions([
            'brand' => 'skoda',
            'model' => 'octavia',
            'color' => 'black',
            'music_type' => 'jbl',
            'wheel' =>  'alloy'
        ])

    ?>
</body>
</html>