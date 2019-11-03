<?php
session_start(); 
$error = ''; 
if (isset($_POST['submit'])) { 
  if (empty($_POST['emailid']) || empty($_POST['password'])) { 
    $error = "E-mail Id or Password is invalid"; 
  } 
  else{ 
    // Define $username and $password 
    $username = $_POST['username']; 
    $password = $_POST['password']; 
    $conn = mysqli_connect("localhost", "root", "", "registrationdata"); 
    // SQL query to fetch information of registerd users and finds user match. 
    $query = "SELECT emailid, password from accounts where emailid=? AND password=? "; 
    // To protect MySQL injection for Security purpose 
    $stmt = $conn->prepare($query); 
    $stmt->bind_param("ss", $emailid, $password); 
    $stmt->execute(); 
    $stmt->bind_result($emailid, $password); 
    $stmt->store_result(); 
    if($stmt->fetch()) //fetching the contents of the row { 
      $_SESSION['login_user'] = emailid; // Initializing Session 
    header("location: loginedhome.html"); // Redirecting To Profile Page 
  } 
  mysqli_close($conn); // Closing Connection 
} 
?>