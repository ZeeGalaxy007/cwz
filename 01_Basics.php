<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>

<body>
    <div class="container">
        This is my first php page
        <br>
        <?php
        echo "Hello World";
        ?>
        <br>
        <?php
        echo "Hello Nashik";
        ?>
        <br>
        <?php
        echo "Welcome to Nashik";
        ?>
        <br>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, nobis ullam. Eius illo saepe nemo adipisci ipsum fugiat minima aliquam, molestias, ex inventore magnam! Repudiandae molestias impedit sapiente distinctio perferendis, ducimus consequatur a aliquam commodi aspernatur provident quam non quaerat quia aut. Animi, esse culpa distinctio nam perspiciatis nulla qui in sequi necessitatibus, quis ducimus eveniet et perferendis atque molestias non eius quisquam quo exercitationem quas. Repellendus reiciendis recusandae voluptate labore aspernatur, qui nesciunt quam eos dolorem quas. Illo, officiis at, facere atque consectetur quaerat quia nesciunt aspernatur ab, excepturi odit ipsum? Nobis corporis quia obcaecati est praesentium atque consequatur!

        <br>
        <?php
        define('PI', 3.14);

        $variable1 = 15;
        $variable2 = 10;
        echo "<br>";
        echo $variable1;
        echo "<br>";
        echo $variable2;
        echo "<br>";
        $sum = $variable1 + $variable2;
        echo $sum;
        echo "<br>";


        //arithmetic operators
        // + - * / %
        echo "The value of variable1 + variable2 = ";
        echo $variable1 + $variable2;
        echo "<br>";

        echo "The value of variable1 - variable2 =";
        echo $variable1 - $variable2;
        echo "<br>";

        echo "The value of variable1 * variable2 = ";
        echo $variable1 * $variable2;
        echo "<br>";

        echo "The value of variable1 / variable2 = ";
        echo $variable1 / $variable2;
        echo "<br>";

        echo "The value of variable1 % variable2 = ";
        echo $variable1 % $variable2;
        echo "<br>";


        //Assignment operators
        $newVar = $variable1;
        echo "The value of newVar = ";
        echo $newVar;
        echo "<br>";

        $newVar += 1;
        echo $newVar;
        echo "<br>";

        $newVar -= 5;
        echo $newVar;
        echo "<br>";

        $newVar *= 3;
        echo $newVar;
        echo "<br>";

        $newVar /= 2;
        echo $newVar;
        echo "<br>";

        $newVar %= 3;
        echo $newVar;
        echo "<br>";

        echo "value of 1==2 is ";
        var_dump(1 == 2);
        echo "<br>";
        
        echo "value of 1==1 is ";
        var_dump(1 == 1);
        echo "<br>";
        
        echo "value of 1<=5 is ";
        var_dump(1 <= 5);
        echo "<br>";


        //increment and decrement operators

        $variable1++;
        echo $variable1;
        echo"<br>";

        $variable1--;
        echo $variable1;
        echo"<br>";

        //logical operators
        // && - and
        // || - or
        // ! - not
        echo "value of 1==1 && 1==2 is ";
        var_dump(1 == 1 && 1 == 2);
        echo "<br>";
        
        echo "value of 1==1 || 1==2 is ";
        var_dump(1 == 1 || 1 == 2);
        echo "<br>";

        echo "value of !(1==1) is ";
        var_dump(!(1 == 1));
        echo "<br>";


        //data types
        //1. string
        //2. integer
        //3. float
        //4. boolean
        //5. array
        //6. object
        //7. null
        //8. resource
        //9. undefined

        echo "<br> data types <br>";

        $string = "This is a string";
        var_dump($string);
        echo "<br>";

        $integer = 10;
        var_dump($integer);
        echo "<br>";

        $float = 10.5;
        var_dump($float);
        echo "<br>";

        $boolean = true;
        var_dump($boolean);
        echo "<br>";

        $array = array("Nashik", "Mumbai", "Pune");
        var_dump($array);
        echo "<br>";

        $object = new stdClass();
        var_dump($object);
        echo "<br>";

        $null = null;
        var_dump($null);
        echo "<br>";


        // $resource = fopen("index.php", "r");
        // var_dump($resource);
        // echo "<br>";
        
        $undefined = $variable1;
        var_dump($undefined);
        echo "<br>";

        echo "<br>";
        echo PI * 1;

        echo "<br>";
        echo PI * 2;
       
        
       ?>
    </div>
</body>

</html>