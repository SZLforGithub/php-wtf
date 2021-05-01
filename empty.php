<?php

unset($x);
echo 'Start empty part!' . PHP_EOL;

// undefined
echo '1. undefined: ';
var_dump(empty($x)); // bool(true)

// 尚未給予初始值
echo '2. 尚未給予初始值: ';
$x;
var_dump(empty($x)); // bool(true)

// null
echo '3. null: ';
$x = null;
var_dump(empty($x)); // bool(true)

// 0
echo '4. 0: ';
$x = 0;
var_dump(empty($x)); // bool(true)

// 空字串
echo '5. \'\': ';
$x = '';
var_dump(empty($x)); // bool(true)

// 空陣列
echo '6. 空陣列: ';
$x = array();
var_dump(empty($x)); // bool(true)

// 字串 0
echo '7. \'0\': ';
$x = '0';
var_dump(empty($x)); // bool(true)

// false
echo '8. false: ';
$x = false;
var_dump(empty($x)); // bool(true)

echo '------------' . PHP_EOL;
