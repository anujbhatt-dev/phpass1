<?php
    $arr1=array(55,45,56);
    echo "Numeric array:<br>";
    for ($i = 0; $i < count($arr1); $i++) {
        echo $arr1[$i] . ' ';
    }
    $arr2=array(101=>"Anuj",102=>"Apurva",103=>"adesh");
    echo "<br><br>Associative array:<br>";
    foreach ($arr2 as $key => $value) {
        echo  $key.' '.$value.'<br>';
    }
    $arr3=array(array(1,"Anuj"),array(2,"bhatt"));
    echo "<br>Multidimentional array:<br>";
    for ($i = 0; $i < count($arr3); $i++) {
        for ($j = 0; $j < count($arr3[$i]); $j++) {
            echo $arr3[$i][$j] . ' ';
        }
        echo "<br>";
    }
?>
