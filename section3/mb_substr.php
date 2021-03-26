<?php
mb_internal_encoding('UTF-8');
$str = 'WINGSプロジェクト';
print mb_substr($str, 5, 2);
// 0から数えるから6文字目から２つ
print '<br />';
print mb_substr($str, 5);
// 6文字目以降
print '<br />';
print mb_substr($str, 5, -4);
// 6文字目以降、末尾4文字カット
print '<br />';
print mb_substr($str, -6, 2);
// 後方6文字から２つ
