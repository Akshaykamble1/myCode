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
        // echo"While-Loop in php";
        // echo"<br>";
        // $language=array("C","C++","JAVA","PYTHON","SQL","HTML","CSS","JAVASCRIPT");
        // $i=0;
        // while($i <=10)
        // {
        //     echo "The value of a is : ",$i;
        //     echo"<br>";
        //     $i++;
        // }

        // echo"Do-While-Loop in php";
        // echo"<br>";
        // $language=array("C","C++","JAVA","PYTHON","SQL","HTML","CSS","JAVASCRIPT");
        // $i=0;
        // do
        // {
        //     echo "The value of a is : ",$i;
        //     echo"<br>";
        //     $i++;
        // }while($i <=10);

        // echo"For-Loop in php";
        // echo"<br>";
        $language=array("C","C++","JAVA","PYTHON","SQL","HTML","CSS","JAVASCRIPT");
        // for($i=0;$i<10;$i++)
        // {
        //     echo"The value of i is : ",$i;
        //     echo"<br>";
        // }

        echo"ForEach-loop ";
        foreach ($language as $value)
        {
            echo"<br> The value of value is : ", $value;
        }
        ?>
    </div>
</body>
</html>