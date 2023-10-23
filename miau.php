<?php
$arr = [['miau', 'remiau'], ['remiau', 'hola']];
$arr = json_encode($arr);
foreach ($arr as $key => $value) {
    // $arr[3] will be updated with each value from $arr...
    echo "{$key} => {$value} ";
    print_r($arr);
}
