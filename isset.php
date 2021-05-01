<?php

// undefined
var_dump(isset($x)); // bool(false)

// 尚未給予初始值
$x;
var_dump(isset($x)); // bool(false)

// null
$x = null;
var_dump(isset($x)); // bool(false)

// 0 算是有設置
$x = 0;
var_dump(isset($x)); // bool(true)

// unset 之後 isset false
unset($x);
var_dump(isset($x)); // bool(false)
