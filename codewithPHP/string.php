<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Pratice</title>
    <style>
        *{
            margin:0;
            padding:0;
        }
        .container{
            background:royalblue;
            padding:40px;
            color:white;
            margin:40px;
            width:700px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Learn Coding with Akshay</h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, impedit?
        </p>
    <?php
    echo"<br>String in PHP<br>";
    $str="This is bottle";
    echo $str;
    echo"<br>";
    echo "Word Present in the string : ",str_word_count($str);
    echo"<br>";
    echo "String Reverse is : ",strrev($str);
    echo"<br>";
    echo"String repeat for 2 time : ", str_repeat($str,2);
    echo"<br>";
    echo"Search for is in this string is : " . strpos($str,"is");
    echo"<br>";
    echo"The replaced string is : " . str_replace("This","That",$str);
    echo"<br>";
    echo"Lenght of the string is : ", strlen($str);
    echo"<br>";
    echo "Stirng in upper case : ", strtoupper($str);
    echo"<br>";
    echo "String in lower case is : ", strtolower($str);
    echo"<br>";
    echo "Replace t with * in the string : ", str_ireplace("t","*",$str);
    echo"<br>";
    ?>
    </div>
</body>
</html>