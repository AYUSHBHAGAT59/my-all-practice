<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form demo</title>
</head>
<body bgcolor="FBB917">
    <h1>blood donation camp</h1>
    <div><h2>registration form</h2></div>
    <form action="connect.php" method="POST">
        <label for="user">first name:</label><br>
        <input type="text" name="name" id="name" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" name="email" id="email" required><br><br>

        <label for="phone">phone:</label><br>
        <input type="text" name="phone" id="phone" required><br><br>

        <label for="bgroup">blood group:</label><br>
        <input type="text" name="bgroup" required><br><br>

        <input type="submit" value="submit" id="submit" name="submit">
    </form>
</body>
</html>

<!-- 
    how to start this file:

    1> go to xampp server start my sql and apache 
    2> click on mysql admin button 
    3> after that your server backend will be start 
    4> then go to chrome and write localhost/tutorial/index.php
    5>then boom this file will be start
 -->