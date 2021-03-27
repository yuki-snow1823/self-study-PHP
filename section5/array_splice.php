<pre>
<?php
$data = ['高江', '青木', '片渕', '和田', '花田', '佐藤'];
print_r(array_splice($data, 2, 3, ['日尾', '掛谷', '薄井']));
// 取った要素が出力され、配列には入ったものも含まれて表示される
print_r($data);
// 負数の場合、一番後ろがマイナス1
print_r(array_splice($data, -3, -2, ['長田', '杉山']));
print_r($data);
print_r(array_splice($data, 3));
print_r($data);
print_r(array_splice($data, 1, 0, ['山田', '矢吹']));
print_r($data);