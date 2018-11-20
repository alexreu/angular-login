<?php

$_POST = json_decode(file_get_contents('php://input'), true);

if(isset($_POST) && !empty($_POST)){
  $username = $_POST['username'];
  $password = $_POST['password'];

  if($username == 'admin' && $password == 'admin'){
    ?>
{
  "success": true,
  "secret": "C'est le secret de l'amdin eternel"
}
  <?php
  }else{
    ?>
{
  "success": false,
  "message": "username or password are incorrect"
}
  <?php
  }
}else{
  ?>
{
  "success":false,
  "message": "Seul les POST sont accepter"
}
  <?php
}
