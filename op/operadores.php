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
?>