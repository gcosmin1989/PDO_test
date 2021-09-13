<?php

$host ='localhost';
$username ='root';
$password ='';
$dbname = 'test_pdo';

//SET DNS
$dns = 'mysql:host='.$host .';dbname'. $dbname;

//Creeare instanta PDO
$pdo=new PDO($dns, $username,$password);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO:: FETCH_OBJ);
$status='admin';

//$sql ='SELECT * from test_pdo.users WHERE status = :status';
//$stmt = $pdo->prepare($sql);
//$stmt->execute(['status'=>$status]);
//$users = $stmt->fetchAll();
//
//
//foreach ($users as $user){
//    Echo $user['name'].'<br>';
//}

$name ='Mini Mouse';
$email='mini@mouse.com';
$status ='guest';

$sql ='INSERT INTO test_pdo.users(name, email, status) Values (:name, :email, :status)';
$stmt= $pdo->prepare($sql);
$stmt->execute(['name'=>$name,'email'=>$email, 'status'=>$status]);
echo'Userul a fost adaugat';


