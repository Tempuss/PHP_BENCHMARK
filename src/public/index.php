<?php

$limit = 100000;
echo "limit : " . $limit;
echo "<br>";
echo "<br>";

$start = microtime(true);

$a = array();
for ($i = 0; $i < $limit; $i++) {
    $a[] = $i;
}

$for_result = (microtime(true) - $start) * 1000;



$start = microtime(true);
$a = array();
while ($i < $limit) {
    $a[] = $i;
    $i++;
}
$while_result = (microtime(true) - $start) * 1000;



$start = microtime(true);
$a = array();
$i = 0;
do {
    $a[] = $i;
    $i++; // 1씩 증가
} while ($i < $limit);   // 조건을 만족하면 위의 코드 실행, 만족하지 않으면 빠져나감;
$do_while_result = (microtime(true) - $start) * 1000;



echo "For Loop";
echo "<br>";
echo "Completed in ", $for_result, " Milli Seconds\n";
echo "<br>";
echo "<br>";

echo "while Loop";
echo "<br>";
echo "Completed in ", $while_result, " Milli Seconds\n";
echo "<br>";
echo "<br>";


echo "do while Loop";
echo "<br>";
echo "Completed in ", $do_while_result, " Milli Seconds\n";
echo "<br>";
echo "<br>";
