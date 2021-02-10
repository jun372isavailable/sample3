<?php
$name = "長山";
if($name = "長山") {
    echo "私は $name です";
}else {
    echo "$nameではありません";
}
$total = 0;
for ($i = 0; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;
$fruits = ["apple","grape","banana","melon","strawberry"];
foreach($fruits as $fruit){
    echo $fruit;
}
$start = 1;
$end = 100;
for($i = $start; $i <= $end; $i++){
    if($i % 5 == 0){
        echo $i;
        echo "\n";
    }
}
