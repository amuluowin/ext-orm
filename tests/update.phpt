--TEST--
swoole_orm::update($table, $data, $where)

--FILE--
<?php

$data = array('height' => 185,'age' => 32);
$where = array('username' => 'smallhow');
$ret = swoole_orm::update("user_info_test", $data, $where);

var_dump($ret);

--EXPECT--
array(2) {
  ["sql"]=>
  string(74) "UPDATE `user_info_test` SET `height` = 185,`age` = 32 WHERE `username` = ?"
  ["bind_value"]=>
  array(1) {
    [0]=>
    string(8) "smallhow"
  }
}