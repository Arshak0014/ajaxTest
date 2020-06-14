<?php
//session_start();
//$_SESSION['test1'] = 'Andrew';
//$_SESSION['test2'] = 'Aramis';
//$_SESSION['test3'] = 'John';
//$_SESSION['test4'] = 'Tony';
//
//
//$output = array('countM' => count($_SESSION));
//
//echo json_encode($output);

//https://ruseller.com/lessons.php?rub=32&id=1452

$aRes = array('name' => 'Andrew', 'nickname' => 'Aramis');

echo json_encode($aRes);
