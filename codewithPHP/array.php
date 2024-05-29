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
            padding:50px
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
        echo"Array in php";
        echo"<br>";
        $language=array("C","C++","JAVA","PYTHON","SQL","HTML","CSS","JAVASCRIPT");
        echo "The selected langauge is : ",$language[7];
        echo"<br>";
        echo "Element in the array : ", count($language);
        ?>
    </div>
</body>
</html>