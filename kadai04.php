<?php

function sum($max){
    $result=$max*2;
    return $result;
} 
echo sum(50)."\n";




function f($a,$b){
    $result=$a+$b;
    return $result;
}
echo f(2,3)."\n";





function  a($arr){
    $result=1;
    foreach($arr as $ar){
        $result=$result*$ar;
    }
    return $result;
}
echo a(array(1,3,5,7,9))."\n";






function max_array($arr){
    $max_number = $arr[0];
    
    foreach($arr as $a){
        if($max_number<$a){
            $max_number=$a;
        }
    }
    return $max_number;
}
echo max_array(array(1,3,5,10,9))."\n";





$str="<h1>こんにゃく</h2>";
echo strip_tags($str)."\n";



$drink=["cola","soda"];
array_push($drink,"tea");
foreach($drink as $dr){
        echo $dr."\n";
}



$array1=[1,2];
$array2=[3,4];
$array=array_merge($array1,$array2);
foreach($array as $b){
    echo $b."\n";
}




echo "現在のタイムスタンプ：".time()."\n";

$timestamp = mktime(0, 0, 0, 5, 1, 2020);
echo "2020/5/1のタイムスタンプ:".$timestamp."\n";


echo date('Y/m/d')."\n";

