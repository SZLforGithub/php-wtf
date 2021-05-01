<?php

// undefined
var_dump(is_null($x)); // Warning: Undefined variable $x bool(true)

// 尚未給予初始值
$x;
var_dump(is_null($x)); // Warning: Undefined variable $x bool(true)

// null
$x = null;
var_dump(is_null($x)); // bool(true)

// 0 不算是 null
$x = 0;
var_dump(is_null($x)); // bool(false)

// unset 之後 is_null false
unset($x);
var_dump(is_null($x)); // Warning: Undefined variable $x  bool(true)
