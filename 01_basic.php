<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        this is my first website
        <?php
            define("PI",3.14);
            echo 'hello world from php';
            $var1="mohan";
            $var2=12;
            $var3=13;
           
            echo $var1;
            echo "<br>";
            echo $var2;
            echo $var2+$var3;
            echo "The value of var2 and var3:",$var2+$var3;
            echo "<br>";
            echo "The value of var2 and var3:",$var3-$var2;
            echo "<br>";
            echo "The value of var2 and var3:",$var2*$var3;
            echo "<br>";
            // assigment
            $var4=$var1;
            echo $var4;
            echo "<br>";
            echo $var3+=1;
            echo "<br>";
            // comparision operator
            echo "the var2 is equal to the var3 ";
            echo var_dump($var2==$var3);
            echo "<br>";
            // increament operator
            echo $var2++;
            echo "<br>";
            // logical operator
            echo var_dump(true and false);
            echo "<br>";
            if ($var2 == $var3 and $var3==0){
                echo $var2;
                echo '<br>';
        
            }
            else{
                echo $var3;
                echo "<br>";
            }
            $var8="mohan is a good boy";
            $my_array1=explode(" ",$var8);
            print_r($my_array1);
            echo "<br>";
            
            echo PI;
    



            
            
        ?> 
    </div>
</body>
</html>