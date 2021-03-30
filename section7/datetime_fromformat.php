<?php
$fmt = 'Y年m月d日'; // この型で
$time = '2016年08月05日'; // この文字を
$dt = DateTime::createFromFormat($fmt ,$time); // 整形する
print $dt->format('Y/m/d');
print $dt->format('w');