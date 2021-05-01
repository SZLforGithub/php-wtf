<?php

unset($x);
echo 'Start is_null part!' . PHP_EOL;

// undefined
echo '1. undefined: ';
var_dump(is_null($x)); // Warning: Undefined variable $x bool(true)

// 尚未給予初始值
echo '2. 尚未給予初始值: ';
$x;
var_dump(is_null($x)); // Warning: Undefined variable $x bool(true)

// null
echo '3. null: ';
$x = null;
var_dump(is_null($x)); // bool(true)

// 0 不算是 null
echo '4. 0: ';
$x = 0;
var_dump(is_null($x)); // bool(false)

// unset 之後 is_null false
echo '5. unset 之後: ';
unset($x);
var_dump(is_null($x)); // Warning: Undefined variable $x  bool(true)

echo '------------' . PHP_EOL;
