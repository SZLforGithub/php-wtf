<?php

unset($x);
echo 'Start isset part!' . PHP_EOL;

// undefined
echo '1. undefined: ';
var_dump(isset($x)); // bool(false)

// 尚未給予初始值
echo '2. 尚未給予初始值: ';
$x;
var_dump(isset($x)); // bool(false)

// null
echo '3. null: ';
$x = null;
var_dump(isset($x)); // bool(false)

// 0 算是有設置
echo '4. 0: ';
$x = 0;
var_dump(isset($x)); // bool(true)

// unset 之後 isset false
echo '5. unset 之後: ';
unset($x);
var_dump(isset($x)); // bool(false)

echo '------------' . PHP_EOL;
