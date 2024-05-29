<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn PHP</title>
</head>
<body>
    <div class="container">
        <h1>PHP with Akshay</h1>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, eum!
        </p>

        <?php
            echo"Hello, Akshay anf You are learning PHP ?";
            echo "<br>";
            $str="Butterfly";
            echo "String is : ", $str;
            echo "<br>";
            $var=67.87;
            echo"Number is : ", $var;
            echo "<br>";
            $bol=true;
            echo"Boolean is  : ", var_dump($bol);
            echo"<br>";

            // to define a contant
            define('pi',3.142);
            $res=pi*13;
            echo"Result is : ", $res;

        ?>
    </div>
</body>
</html>