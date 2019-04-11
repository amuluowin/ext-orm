--TEST--
swoole_orm::replace($table, $data)

--FILE--
<?php

$replace_data = array();
$replace_data['user_id'] = 111111;
$replace_data['appid'] = 'wx8bd51923ccbd5200';
$replace_data['union'] = NULL;
$replace_data['session_key'] = true;
$replace_data['nickname'] = false;
$replace_data['province'] = 3.18;
$replace_data['gender'] = 1;

$ret = swoole_orm::replace("userinfo", $replace_data);

var_dump($ret);

--EXPECT--
array(1) {
  ["sql"]=>
  string(149) "REPLACE INTO `userinfo` (`user_id`,`appid`,`union`,`session_key`,`nickname`,`province`,`gender`) values (111111,'wx8bd51923ccbd5200',NULL,1,0,3.18,1)"
}
