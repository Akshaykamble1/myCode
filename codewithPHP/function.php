<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn PHP</title>
    <style>
        *{
            margin:0;
            padding:0;
        }
        .container{
            background:pink;
            color:blue;
            height:500px;
            margin:100px;
            padding:50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>PHP with Akshay</h1>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, eum!
        </p>

        <?php
        echo"<br>Simple-Function in php<br>";
        function print55()
        {
            echo"<br> I am seven years old. <br>";
        }
        print55();
        print55();

        echo"<br>Function-Parmeter in php<br>";
        function print5($age)
        {
            echo"<br> I am $age years old. <br>";
        }
        print5(45);
        print5(22);
        
        ?>
    </div>
</body>
</html>