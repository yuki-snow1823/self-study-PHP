<?php
$dsn = 'mysql:dbname=phptest; host=127.0.0.1; charset=utf8';
$usr = 'root';
$passwd = '';

try {
  $db = new PDO($dsn, $usr, $passwd);
  print '接続に成功しました。';
} catch (PDOException $e) {
  print "接続エラー：{$e->getMessage()}";
} finally {
  $db = null;
}