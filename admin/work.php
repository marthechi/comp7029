<?php
  #including variables
  $Username = $_POST["Username"];
  $email = $_POST["email"];
  $Password = $_POST["Password"];

  #Database including
  $conn = new mysqli("localhost", "root", " ", "connect");
  if($conn->connect_error){
    die("Connection Failed : ".$conn->connect_error);
  } else{
    $stmt = $conn->prepare("insert into registration(User name, Password, email) value(?,?,?)")
    $stmt->bind_param("sss",$Username, $Password, $email);
    $stmt->execute();
    echo "registration Successfully...."
    $stmt->close();
    $conn->close();
  }
?>