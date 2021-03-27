<pre>
<?php
$str = ['PHPは良い言語です。', 'PHPは良いサーバ実行環境です。'];

// 組み合わせの変換可能
$src = ['PHP', '良い'];
$rep = ['PHP 7', '素晴らしい'];
print_r(str_replace($src, $rep, $str, $cnt));
print "{$cnt}個の置き換えをしました。";
