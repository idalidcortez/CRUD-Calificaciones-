<?php
include_once 'connect.php';
?>

<!DOCTYPE html>
<html>
<head>
  
         <body>
          <div class= "margin">
        <div class="box-part text-center" >
      
      <div class= "image">

      <img src="logo_ugc2.png" width="310" height="120"> <br>

    </div>

      <figure class="text-center"> <h1>Grades: Sixth Semester </h1><h2>Administrative informatics</h2> 

    </div>

    <div class="box-part text-center">

<a href="registration.php">
  <button class= "my-button" >Add student</button>
</a>


</div>


    <title>index</title> 

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">  
    
     <link rel="stylesheet" href="https://developer.mozilla.org/en-US/docs/Web/CSS/Using_CSS_custom_properties">

     <link rel="stylesheet" href="https://www.w3schools.com/css/css3_buttons.asp">

    <link rel="stylesheet" href="index.css">

</head>

</body>


<!DOCTYPE html>
<html>
<head>


  <!-- comments-->

</head>
<body>


<table class="container text-center">

<br>
<th>ID</th>
<th>Name</th>
<th>Last Name</th>
<th>P1</th>
<th>P2</th>
<th>P3</th>
<th>Final</th>

</tr>



<?php

$conn = mysqli_connect("localhost", "root", "PHPEverest23", "grades");
$sql = "SELECT * from registry";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   while ($row = $result-> fetch_assoc()){

    echo "<tr><td>" . $row["id"] ;
    echo "<td>" . $row["name"] ;
    echo "<td>" . $row["last_name"];
    echo "<td>" . $row["P1"];
    echo "<td>" . $row["P2"];
    echo "<td>" . $row["P3"];
    echo "<td>" . $row["final"];
    
  
   }
}

  
?>

<br>
</table>
</div>


</body>
</html>