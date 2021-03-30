<?php
function my_array_walk(array $array, callable $func) {
  foreach ($array as $key => $value) {
    $func($value, $key);
  }
}

$result = 0; // 内部的に自由にコールバック作れる
function sum(float $value, int $key) {
  global $result;
  $result += $value;
}

$data = [100, 50, 10, 5];
my_array_walk($data, 'sum'); //呼び出し元で好きなものを呼べる
print "合計値：{$result}";