--TEST--
swoole_orm::insert($table, $data)

--FILE--
<?php

$insert_data = array();
$insert_data['user_id'] = 111111;
$insert_data['appid'] = 'wx8bd51923ccbd5200';
$insert_data['union'] = NULL;
$insert_data['session_key'] = true;
$insert_data['nickname'] = false;
$insert_data['province'] = 3.18;
$insert_data['gender'] = 1;

$ret = swoole_orm::insert("userinfo", $insert_data);

var_dump($ret);

--EXPECT--
array(1) {
  ["sql"]=>
  string(148) "INSERT INTO `userinfo` (`user_id`,`appid`,`union`,`session_key`,`nickname`,`province`,`gender`) values (111111,'wx8bd51923ccbd5200',NULL,1,0,3.18,1)"
}