<?php

require_once('config.php');

?>

<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" href="registration.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">  
    
     <link rel="stylesheet" href="https://developer.mozilla.org/en-US/docs/Web/CSS/Using_CSS_custom_properties">

     <link rel="stylesheet" href="https://www.w3schools.com/css/css3_buttons.asp">

    <link rel="stylesheet" href="index.css">


	<title>Registration</title>

</head>

<body>

<div class= "Add-student">
<div class= "content"> 

<?php

if(isset($_POST['Add'])){

	echo "Student registered";

	$name       = $_POST['name'];
	$last_name  = $_POST['last_name'];
	$P1         = $_POST['P1'];
	$P2         = $_POST['P2'];
	$P3         = $_POST['P3'];

    $sql = "INSERT into registry (name, last_name, P1, P2, P3 ) VALUES(?,?,?,?,?)";
    $stmtinsert = $db->prepare($sql);
    $result = $stmtinsert->execute([$name, $last_name, $P1, $P2, $P3]);
      if($result){
       echo "";
      } else{
            echo "There were errors while saving the data";
           
      }
}

?>

</div>


  

          <div class= "margin">
        <div class="box-part text-center" >
      
      <div class= "image">
      
      <a href="index.php">
        
         <img src="back2.png" alt="Button Image">
       
      </a>


      <img src="logo_ugc2.png" width="310" height="120"> <br><br>

    </div>

      <figure class="text-center"> <h1>Grades: Sixth Semester </h1><h2>Administrative informatics</h2> 

    </div>

    <div class="box-part text-center">

<div> 
    <form action= "registration.php" method="post">
    <div class= "container">
    <h1 class= "regt"></h1>
    <p>Fill up the form</p>
       <label for= "name"><b>Name</b></label> <br>
       <input type="text" name= "name" placeholder="Student's name" required> <br> <br>
       
       <label for= "last_name"><b>Last name</b></label> <br> 
       <input type="text" name= "last_name" placeholder="Student's last name" required> <br>
       
       <br>
       <label for= "P1"><b>P1</b></label> <br>
       <input type="number" name= "P1" placeholder="P1 grade" required>

       <br>
       <label for= "P2"><b>P2</b></label> <br>
       <input type="number" name= "P2" placeholder="P2 grade" required>

       <br>
       <label for= "P3"><b>P3</b></label> <br>
       <input type="number" name= "P3" placeholder="P3 grade" required>

       <br> <br>
       <input type="submit" name="Add" value= "Upload" class= "my-button2">
</div>
</div>
</form>
</div>

</body>