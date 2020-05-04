<?php
$name="Yuki";
if($name=="Yuki"){
    echo "私はYukiです"."\n";
}
else{
    echo "Yukiではありません"."\n";
}


$total=0;
for($i=1;$i<10000;$i++){
    $total += $i;
}
echo $total."\n";


$fruits=array("apple","orange","lemon","banana","peach");
foreach($fruits as $fruit){
    echo $fruit."\n";
}



for($i=1;$i<101;$i++){
    if($i%5==0){
        echo $i."\n";
    }
}