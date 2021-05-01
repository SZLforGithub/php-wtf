<?php

// 如果是 int 或者其中一個是 int ，會自動轉為 int 比對
var_dump(1 == '1'); // bool(true)
var_dump(2 == '1'); // bool(false)
var_dump('2' == '1'); // bool(false)

// null 會等於 0，但若是字串跟數字則都不等於
var_dump(null == 0); // bool(true)
var_dump('null' == 0); // bool(false)
var_dump('null' == '0'); // bool(false)
var_dump(null == '0'); // bool(false)

// false 會等於 0，字串的 false 相當正常，但 bool 的 false 會等於字串的 0
var_dump(false == 0); // bool(true)
var_dump('false' == 0); // bool(false)
var_dump('false' == '0'); // bool(false)
var_dump(false == '0'); // bool(true)

// 空字串則是都不等於 0
var_dump('' == 0); // bool(false)
var_dump('' == '0'); // bool(false)
