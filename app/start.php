<?php
use RT\DataBase\MySqlConnection as DbContext;
use RT\DataBase\PDOConnection;;
use RT\DataBase\IDbContext;

require_once __DIR__.'../../vendor/autoload.php';



function query(IDbContext $Db,string $query)
{
    $Db->exeNonQuery($query);
}

$db=new DbContext('localhost','root','','study');

//query($db,"insert into login values('tomin','tomin')");

$pdo=new PDOConnection(new PDO('mysql:host=localhost;dbname=study','root',''));

query($pdo,"insert into login values('PDO','PDO')");


