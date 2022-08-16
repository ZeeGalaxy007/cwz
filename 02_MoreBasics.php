<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoreBasics Tutorial</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }



        .container {
            max-width: 80%;
            margin: auto;
            background-color: lightcoral;
            color: black;
            padding: 25px;
        }

        .party {
            background-color: lightblue;
            color: black;
            padding: 25px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Lets Learn About PHP</h1>
        <h2 class="party">Your Party Status Is Here</h2>
        <?php

        //if else statement
        $age = 7;
        echo "<br>";
        if ($age >= 8) {
            echo "<h3>you are eligible for go to party</h3>";
        } elseif ($age <= 8) {
            echo "<h3>you are 8 year old you are not eligible</h3>";
        } else {
            echo "<h3>you are not eligible for go to party</h3>";
        }

        //array
        $language = array("<h3>PHP</h3>", "<h2>python</h2>", "<h1>java</h1>", "<h1>c++</h1>", "<h1>c#</h1>", "<h1>javascript</h1>");
        echo "<br>";
        echo $language[0];
        echo "<br>";
        echo $language[1];
        echo "<br>";
        echo $language[2];
        echo "<br>";

        //while loop
        $a = 0;
        echo "<br>";
        while ($a < 15) {
            echo $a;
            echo "<br>";
            $a++;
        }
        echo "<br>";
        
        
        //iterating array using while loop
        $a = 0;
        echo "<br>";
        while ($a < count($language)) {
           echo $language[$a];
            $a++;
        }
        echo "<br>";

        //do while loop
        $a = 0;
        do {
            echo "The value of a is :";
            echo $a;
            $a++;
            echo "<br>";
        }while($a < 10);

        //for loop
            for($a<0;$a<10;$a++){
                echo "The value a from for loop :" ;
            } echo $a;
       
            

            function print5(){
                echo "Zee";
            }
            echo"<br>";
            print5();
            echo"<br>";
            print5();
            echo"<br>";
            print5();
            echo"<br>";
            print5();
            echo"<br>";
        ?>

        

    </div>
</body>

</html>