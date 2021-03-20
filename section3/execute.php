<pre>
<?php
$result = `pwd`;
print mb_convert_encoding($result, 'UTF-8', 'SJIS'); // windowsだと変換必要
//print $result;