<?php

session_start();

$user = $_SESSION['user'];

if($user == 'admin'){
  echo '{
    "message": "C\'est un message secret secret pour l\'administrateur",
    "success": true
  }';
}else {
  echo '{
    "message": "Vous ne pouvez pas arriver jusqu\'ici",
    "success": false
  }';
}
