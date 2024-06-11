<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form and Database</title>
</head>
<body>
<?php
    //data submission:
        $email=(isset($_POST['email']) && $_POST['email'])? $_POST['email'] : ""; 
        $pass= (isset($_POST['pass']) && $_POST['pass']) ? $_POST['pass'] : "";
        $describe = (isset($_POST['text']) && $_POST['text']) ? $_POST['text'] : "";
    //conenction with database:
        $servername="localhost";
        $username="root";
        $password="";
        $database="sazz1";

        $conn=mysqli_connect($servername , $username , $password ,$database);
        echo "sucessfully connected to the database";
    //Insert the data:
    $sql="INSERT INTO `contacts` (`Serialnumber`, `Email`, `password`, `Description`) VALUES ('','$email', '$pass', '$describe')";
    $result = mysqli_query($conn,$sql);

    if($result){
        echo "sucessfully data are inserted<br>";
    }
?>
<form action="" method="post">
    <h1>Contact us</h1>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input name="pass" type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <textarea name="text" rows="5" cols="60"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</body>
</html>