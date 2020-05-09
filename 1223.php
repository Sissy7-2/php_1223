<?php

//【課題1】

$name = "marina";

if ($name == "marina") {
    echo "私は　marina　です";
} else {
    echo "marinaではありません";
}

echo "\n";

//【課題2】
$total = 0;
echo $total;
for ($i = 0; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;

echo "\n";

//【課題3】

$fruits = array("orange", "pineapple", "mango", "mulberry", "persimmon");
foreach($fruits as $fruit){
    echo "要素は" . $fruit;
    echo "\n";
}


//【4.応用】

$start = 1;
$end = 100;

for($i = $start; $i <= $end; $i++){

  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}

echo "\n";
