<?php
include_once('../common.php');

$ex1 = $_POST['ex1'];
$ex2 = $_POST['ex2'];
$ex3 = $_POST['ex3'];
$ex4 = $_POST['ex4'];
$ex5 = $_POST['ex5'];
$ex6 = $_POST['ex6'];
$ex7 = $_POST['ex7'];
$ex8 = $_POST['ex8'];
$ex9 = $_POST['ex9'];
$ex10 = $_POST['ex10'];
$ex11 = $_POST['ex11'];

$sql = " INSERT into apply
            set ex1 = '$ex1',
            ex2 = '$ex2',
            ex3 = '$ex3',
            ex4 = '$ex4',
            ex5 = '$ex5',
            ex6 = '$ex6',
            ex7 = '$ex7',
            ex8 = '$ex8',
            ex9 = '$ex9',
            ex10 = '$ex10',
            ex11 = '$ex11' ";
        sql_query($sql);

// echo $sql;
// exit;

echo json_encode(array('msg' => "success"));

?>