<?php

// undefined
var_dump(empty($x)); // bool(true)

// 尚未給予初始值
$x;
var_dump(empty($x)); // bool(true)

// null
$x = null;
var_dump(empty($x)); // bool(true)

// 0
$x = 0;
var_dump(empty($x)); // bool(true)

// 空字串
$x = '';
var_dump(empty($x)); // bool(true)

// 空陣列
$x = array();
var_dump(empty($x)); // bool(true)

// 字串 0
$x = '0';
var_dump(empty($x)); // bool(true)

// false
$x = false;
var_dump(empty($x)); // bool(true)
