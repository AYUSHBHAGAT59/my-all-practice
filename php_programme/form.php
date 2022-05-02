<?php
// echo "hello form";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayush Bhagat-Contact</title>
    <link rel="shortcut icon" href="ayush bhagat.png" type="image/x-icon">
    <style>
        *{
            margin: 0%;
            padding: 0%;
        }
        #container{
            border: 2px solid black;
            width: fit-content;
            height: fit-content;
            padding: 1vh;
            border-radius: 1vh;
            /* margin-bottom: 50vh; */
            margin-top: -9vh;
            background: url(bg.jpg);
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            box-sizing: border-box;
            box-shadow: 5px 5px 10px black;
        }
        #name{
            width: 50vh;
            height: 5vh;
            border-radius: 1vh;
            outline: none;
            border: 2px solid lightcoral;
            font-size: larger;
            font-weight: bolder;
            font-family: cursive;
            padding-left: .5vh;
            color: lightcoral;
        }
        #num{
            width: 50vh;
            height: 5vh;
            border-radius: 1vh;
            outline: none;
            border: 2px solid lightcoral;
            font-size: larger;
            font-weight: bolder;
            font-family: cursive;
            padding-left: .5vh;
            color: lightcoral;
            outline: none;
        }
        #text{
            border: 2px solid lightcoral;
            border-radius: 1vh;
            font-size: larger;
            font-weight: bolder;
            font-family: cursive;
            padding-left: .5vh;
            color: lightcoral;
            outline: none;
        }
        #sub{
            border: 2px solid lightcoral;
            border-radius: 1vh;
            width: 10vh;
            height: 5vh;
            background-color: white;
            font-size: larger;
            font-weight: bolder;
            font-family: cursive;
            cursor: pointer;
        }
        #res{
            border: 2px solid lightcoral;
            border-radius: 1vh;
            width: 10vh;
            height: 5vh;
            background-color: white;
            font-size: larger;
            font-weight: bolder;
            font-family: cursive;
            cursor: pointer;
        }
        header{
            border: 2px solid transparent;
            background-color: dimgray;
            width: auto;
            height: 5vh;
            overflow: hidden;
            margin-bottom: 15vh;
            justify-content: center;
            align-items: center;
        }
        nav{
            display: flex;
            justify-content: center;
            align-items: center;
            border: 2px solid transparent;
            width: fit-content;
            margin-top: 1.5vh;
            margin-left: 3vh;
        }
        #pro{
            border: 2px solid black;
            width: 20vh;
            height: 20vh;
            border-radius: 25vh;
            margin-bottom: 1vh;
            background: url(ayush\ bhagat.png);
            background-position: top;
            background-size: cover;
            background-repeat: no-repeat;
        }
        body{
            overflow: hidden;
            background: url(form-img.jpeg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        a{
            font-size: larger;
            font-weight: bolder;
            text-decoration: none;
            color: lightgreen;
            letter-spacing: .5vh;
            word-spacing: .5vh;
        }
        .container{
            background-color: dimgray;
            width: auto;
            height: 10vh;
            border: 2px solid transparent;
            margin-top: 9vh;
            color: aliceblue;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            padding: 2vh;
        }
        span{
            border: 2px solid transparent;
            margin-left: 95vh;
        }
        #name:hover{
            border:2px solid lightgreen;
        }
        #num:hover{
            border: 2px solid lightgreen;
        }
        #text:hover{
            border: 2px solid lightgreen;
        }
        #sub:hover{
            border: 2px solid lightgreen;
            background-color: goldenrod;
            transition: 1s;
            color: aliceblue;
        }
        #res:hover{
            border: 2px solid lightgreen;
            background-color: goldenrod;
            transition: 1s;
            color: aliceblue;
        }
        #pro:hover{
            width: 25vh;
            height: 25vh;
            transition: 1s;
            position: relative;
            z-index: 1;
            border: 2px solid gold;
        }
        #container:hover{
            box-sizing: border-box;
            box-shadow: -10px 5px 10px tomato;
            transition: 1s;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <a href="project.html">Back...</a>
        </nav>
    </header>
    <center>
    <div id="container">
        <div id="pro"></div>
    <form action="./index.html" method="post">
        <input type="text" placeholder="Enter Your Full Name" required id="name" autofocus autocomplete="off" name="fullname"><br><br>
        <input id="num" type="tel" name="" placeholder="Enter Your Mobile Number (OPTIONAL)" pattern="[0-9]{10}" maxlength="10" autocomplete="off" name="number"><br><br>
        <textarea name="" id="text" cols="30" rows="10" placeholder="Enter Your Query" autocomplete="off" name="area"></textarea><br>
        <input type="submit" value="submit" id="sub" name="submit">
        <input type="reset" value="reset" id="res" name="reset">
    </form>
</div>
</center>
<footer>
    <div class="container">
        <span>©ayush_bhagat</span>
    </div>
</footer>
</body>
</html>