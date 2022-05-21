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
    // creating class
    class detail{
        //  public $student = "Student Detail Are Follows";
        public $student_info = [
            'Name' => 'Ayush Bhagat',
            'Std' => 'Second Year',
            'Roll No.' => '10',
            'Class' => 'FYIT'
        ];
        public function experiment($default){
            foreach ($default as $key => $value) {
                # code...
                echo $key.' : '.$value."<br />";
            }
        }
    }
    // creating object
    $obj = new detail();
    echo $obj -> experiment([
        "Name" => "Ayush Bhagat",
        "Std" => "Second Year",
        "Roll No." => "10",
        "Class" => "FYIT"
    ]);


    // Note
    // dot operator .
    // object operator ->
    // var_dump($varibale-name); is used to echo false value of booleans
?>
</body>
</html>