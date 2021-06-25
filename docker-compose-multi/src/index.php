<?php
echo 'Hello World!'.PHP_EOL;

$mysql = new PDO('mysql:host=db', 'root', 'root');
$query = $mysql->query('SELECT VERSION()');
$version = $query->fetch();
echo $version[0].PHP_EOL;

$redis = new Redis();
$redis->connect('cache', 6379);
$info = $redis->info();
echo $info['redis_version'].PHP_EOL;

