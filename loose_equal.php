<?php

unset($x);
echo 'Start loose equal part!' . PHP_EOL;

// 如果是 int 或者其中一個是 int ，會自動轉為 int 比對
echo '1. int ,string int: ' . PHP_EOL;
echo '1-1. 1 == \'1\': ';
var_dump(1 == '1'); // bool(true)
echo '1-2. 2 == \'1\': ';
var_dump(2 == '1'); // bool(false)
echo '1-3. \'2\' == \'1\': ';
var_dump('2' == '1'); // bool(false)

// null 會等於 0，但若是字串跟數字則都不等於
echo '2. null, int, string int: ' . PHP_EOL;
echo '2-1. null == 0: ';
var_dump(null == 0); // bool(true)
echo '2-2. \'null\' == 0: ';
var_dump('null' == 0); // bool(false)
echo '2-3. \'null\' == \'0\': ';
var_dump('null' == '0'); // bool(false)
echo '2-4. null == \'0\': ';
var_dump(null == '0'); // bool(false)

// false 會等於 0，字串的 false 相當正常，但 bool 的 false 會等於字串的 0
echo '3. false, int, string int: ' . PHP_EOL;
echo '3-1. false == 0: ';
var_dump(false == 0); // bool(true)
echo '3-2. \'false\' == 0: ';
var_dump('false' == 0); // bool(false)
echo '3-3. \'false\' == \'0\': ';
var_dump('false' == '0'); // bool(false)
echo '3-4. false == \'0\': ';
var_dump(false == '0'); // bool(true)

// 空字串則是都不等於 0
echo '4. \'\', int, string int: ' . PHP_EOL;
echo '4-1. \'\' == 0: ';
var_dump('' == 0); // bool(false)
echo '4-2. \'\' == \'0\': ';
var_dump('' == '0'); // bool(false)

echo '------------' . PHP_EOL;
