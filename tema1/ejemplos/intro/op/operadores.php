<?php
    $j=0;
    echo $j++; //$j+=1;
    echo '<br>';
    echo $j.'<br>';
    $j+=5; //$j=$j+5
    echo $j.'<br>';
    $j %= 4;
    echo $j.'<br>';
    $i=2.0;

    echo ($j === $i).'<br>';


    $result = $i>1 && $j==2;
    echo "$result <br>";
    $j=0;
    $result = $i>5 || $j;
    echo "$result <br>";

    $j+=5; //$j=$j+5
    echo $j.'<br>';

    $j-=2; //$j=$j-2
    echo $j.'<br>';

    echo ++$j.'<br>'; //$j+=1

    $msgs = 5;
    echo "You have " . $msgs . " messages.";

    $msgs .= " news";// $msgs = $msgs . " news";

    $text = 'My spelling\'s atroshus'; 

    $text = "She wrote upon it, \"Return to sender\".<br>";

    echo $text;

    echo "Date\tName\tPayment";

    $author = "Bill Gates";
    $text = "Measuring programming progress by lines of code is like
    Measuring aircraft building progress by weight.
    - $author.";
    echo $text."<br>";

    $j+="1"; //da un warning pero lo convierte a int
    echo $j;
?>