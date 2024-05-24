<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <?php
    $languages= array("python","english",5,"php");
    echo $languages[2];
    echo "<br>";
    echo count($languages);
    echo "<br>";
    //while
    $a=0;
    while($a<=10){
        echo ("the values of a is :");
        echo $a;
        echo "<br>";
        $a++;

    }
    $i=0;
    while($i <(count($languages))){
        echo $languages[$i];
        echo "<br>";
        $i++;
    }
    // do while
    $p=20;
    do{
        echo $p;
        $p++;
        echo "<br>";
    }
    while($p<10);
    // for loop
    $mohan=array("kishan","ajit","suresh");
    for ($j=0 ; $j < count($mohan);$j++){
        echo $mohan[$j];
        echo "<br>";
    }
 
    foreach($languages as $i){
        echo "<br> the value is :";
        echo $i;
    }
    // function mohan($n){
    //     echo "<br> the value of n is :";
    //     echo var_dump($n);
    // }

    // mohan(23);
    // mohan(87);
    // mohan('ram')
    $str1="ram is a good boy";
    echo $str1;
    $l=strlen($str1);
    echo "<br>";
    echo $l;
    $var1="mohan";
    $var2="house";
    echo $var1." kishan ".$var2;
    echo "<br>";
    //count words
    echo str_word_count($str1);
    $v=12;
    echo strrev($v);
    echo "<br>";
    echo strpos($str1,"g");
    echo "<br>";
    //replace 
    $c1="i have nothing";
    echo str_replace("nothing","everything",$c1);








    ?>


    </div>
    
</body>
</html>