<?php 
print false ? 1 : false ? 'OK' : 'NG'; // 括弧がないと先頭だけ処理して終わり
print (true ? 1 : false) ? 'OK' : 'NG';
print false ? 1 : (true ? 'OK' : 'NG');
