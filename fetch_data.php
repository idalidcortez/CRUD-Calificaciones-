<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title> 
    <link rel="stylesheet" href="css/calificaciones.css">

</head>

<figure class="text-center"> <h1>Grades </h1><h2>Sixth Semester</h2> 

<body>

<?php
include 'connect.php';
$conn = OpenCon();
echo "Connected Successfully";
CloseCon($conn);
?>

<?php
include("connect.php");

$db= $conn;
$tableName="registry";
$columns= ['id', 'name','last_name','P1','P2', 'P3','final'];
$fetchData = fetch_data($db, $tableName, $columns);

function fetch_data($db, $tableName, $columns){
 if(empty($db)){
  $msg= "Database connection error";
 }elseif (empty($columns) || !is_array($columns)) {
  $msg="columns Name must be defined in an indexed array";
 }elseif(empty($tableName)){
   $msg= "Table Name is empty";
}else{

$columnName = implode(", ", $columns);
$query = "SELECT "*" FROM $registry"." ORDER BY id DESC";
$result = $db->query($query);

if($result== true){ 
 if ($result->num_rows > 0) {
    $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
    $msg= $row;
 } else {
    $msg= "No Data Found"; 
 }
}else{
  $msg= mysqli_error($db);
}
}
return $msg;
}
?>