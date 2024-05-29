<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn PHP</title>
</head>
<style>
    *{
        margin:0;
        padding:0;
    }
    .container{
        background:red;
        color:white;
        padding:30px;
        margin:50px;    
    }
</style>
<body>
    <div class="container">
        <h1>PHP with Akshay</h1>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, eum!
        </p>

        <?php
        // echo"if condition";
        // echo"<br>";
        // $pwd=9090;
        // if($pwd==9090)
        // {
        //     echo"Welcome to the world of programming : " , $pwd;
        // }

        // echo"if-else condition";
        // echo"<br>";
        // $age=22;
        // if($age>18)
        // {
        //     echo"You are eligible for vote : " , $age;
        // }
        // else
        // {
        //     echo"You are not eligible for vote : " , $age;   
        // }

        echo"if-else condition";
        echo"<br>";
        $mark=23;
        if($mark>90 and $mark<100)
        {
            echo"You are grade is O : " , $mark;
        }
        else if($mark>80 and $mark<90)
        {
            echo"You are grade is A: " , $mark;
        }
        else if($mark>70 and $mark<80)
        {
            echo"You are grade is B: " , $mark;
        }
        else if($mark>60 and $mark<70)
        {
            echo"You are grade is C: " , $mark;
        }
        else if($mark>50 and $mark<60)
        {
            echo"You are grade is D: " , $mark;
        }
        else if($mark>40 and $mark<50)
        {
            echo"You are grade is E: " , $mark;
        }
        else
        {
            echo"You Failed in the exam : " , $mark;   
        }
        ?>
    </div>
</body>
</html>