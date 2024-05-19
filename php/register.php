<?php
session_start();
include('datab_connect.php');

$name = $_REQUEST['fullname'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];


if(empty($name)||empty($email)||empty($password)){
    echo   "
    <script>
        alert('fill the requirement')
        window.location = '../register.php'
    </script>
    
    ";

    exit;
};


$query = "INSERT INTO users (name,emaIl,password) VALUES ('$name','$email','$password')";
$result = mysqli_query($connect,$query)||mysqli_error($connect);

if($result){
  echo  "
  <script>
      alert('user added')
      window.location = '../login.php'
  </script>
  
  ";


}