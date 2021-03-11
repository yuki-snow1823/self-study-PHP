<?php
$x = 1;
$y = &$x;
$x = 5;
print $y; //当然5が出る