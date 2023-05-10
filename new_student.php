<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $last_name = $_POST["last_name"];
    $P1 = $_POST["P1"];
    $P2 = $_POST["P2"];
    $P3 = $_POST["P3"];
    $final = $_POST["final"];

    // Perform SQL query to insert user data into the database
    $sql = "INSERT INTO users (id, name, last_name, P1, P2, P3, final) 
    VALUES ('$id''$name', '$last_name', '$P1', '$P2', '$P3', '$final')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>

<!DOCTYPE html>
<html>
<head>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
    <link rel="stylesheet" href="libs/css/main.css" />

  
         <body>
          <div class= "margin">
        <div class="box-part text-center" >
      
      <div class= "image">

      <img src="logo_ugc2.png" width="310" height="120"> <br>

    </div>

      <figure class="text-center"> <h1>Register student: Sixth Semester </h1><h2>Administrative informatics</h2> 

    </div>


     <div>
    <title>Add student</title> 
<h2 class= "Add-student">(Fill in data)</h2>
    </div>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">  
    
     <link rel="stylesheet" href="https://developer.mozilla.org/en-US/docs/Web/CSS/Using_CSS_custom_properties">

     <link rel="stylesheet" href="https://www.w3schools.com/css/css3_buttons.asp">

    <link rel="stylesheet" href="index.css">


    <div class= "content">
    <form method="post">
        <label>Name:</label>
        <input type="text" name="name" placeholder= "Student's name" required>
        <br>
        <label>Last name:</label>
        <input type="text" name="last_name" placeholder= "Student's last name" required>
        <br>
        <label>P1:</label>
        <input type="number" name="P1" placeholder= "Enter grade from P1" required>
        <br>
        <label>P2:</label>
        <input type="number" name="P2" placeholder= "Enter grade from P2" required>
        <br>
        <label>P3:</label>
                <input type="number" name="P3" placeholder= "Enter grade from P3" required>
        <br>
        <br>
        <button type="submit" class = "my-button2" >Submit</button>
    </form>

</div>

<div class="page">
  <div class="container-fluid">
    <div class="row">
    <div class="panel panel-default">
      <div class="panel-heading">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Add student</span>
       </strong>
      </div>
      <div class="panel-body">
        <div class="col-md-6">
          <form method="post" action="add_user.php">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Student's name" required>
            </div>
            <div class="form-group">
                <label for="last_name">Last name</label>
                <input type="text" class="form-control" name="last_name" placeholder="Student's last name">
            </div>
            <div class="form-group">
                <label for="P1">P1 Grade</label>
                <input type="number" class="form-control" name ="P1"  placeholder="P1 Grade">
            </div>
             <div class="form-group">
                <label for="P2">P2 Grade</label>
                <input type="number" class="form-control" name ="P2"  placeholder="P2 Grade">
            </div>
             <div class="form-group">
                <label for="P3">P3 Grade</label>
                <input type="number" class="form-control" name ="P3"  placeholder="P3 Grade">
            </div>
            <div class="form-group clearfix">
              <button type="submit" name="add_user" class="btn btn-primary">Guardar</button>
            </div>
        </form>
        </div>

      </div>

    </div>
  </div>

     </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
  <script type="text/javascript" src="libs/js/functions.js"></script>
  </body>
</html>
