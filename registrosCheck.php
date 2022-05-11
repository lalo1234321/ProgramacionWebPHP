<?php
$email = $password = $passwordC = $emailErr = $passwordErr = $passwordCErr = "";

/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = test_input($_POST["email"]);
  $password = test_input($_POST["pass"]);
  $passwordC = test_input($_POST["passC"]);
}*/

/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = test_input($_POST["email"]);
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format";
  }
}*/

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["email"])) {
    $emailErr = "Correo es requerido";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "El formato del correo no es válido";
    }
  }

  /*if (empty($_POST["pass"])) {
    $passwordErr = "La contraseña es requerida";
  } else {
    $password = validaContrasena($_POST["pass"]);
  }

  if (empty($_POST["passC"])) {
    $passwordCErr = "La contraseña es requerida";
  } else {
    $passwordC = validaContrasena2($_POST["passC"]);
  }*/
}

function validaContrasena($password){
  $passwordErr = "";
  if (strlen($password)<6) {
    $passwordErr = "La contraseña debe tener mínimo 6 caracteres";
    return false;
  }
  if(!preg_match('`[a-z]`',$passwordErr)){
    $passwordErr = "La contraseña debe contener al menos una letra minúscula";
    return false;
  }
  if(!preg_match('`[A-Z]`',$passwordErr)){
    $passwordErr = "La contraseña debe contener al menos una letra mayúscula";
    return false;
  }
  if(!preg_match('`[0-9]`',$passwordErr)){
    $passwordErr = "La contraseña debe contener al menos un número";
    return false;
  }
  $passwordErr = "";
  return true;
}

function validaContrasena2($passwordC){
  $passwordCErr = "";
  if (strlen($passwordC)<6) {
    $passwordCErr = "La contraseña debe tener mínimo 6 caracteres";
    return false;
  }
  if(!preg_match('`[a-z]`',$passwordCErr)){
    $passwordCErr = "La contraseña debe contener al menos una letra minúscula";
    return false;
  }
  if(!preg_match('`[A-Z]`',$passwordCErr)){
    $passwordCErr = "La contraseña debe contener al menos una letra mayúscula";
    return false;
  }
  if(!preg_match('`[0-9]`',$passwordCErr)){
    $passwordCErr = "La contraseña debe contener al menos un número";
    return false;
  }
  $passwordCErr = "";
  return true;
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

/*function check_email($email){
  $matches = null;
  return (1 === preg_match('/^[A-z0-9\\._-]+@[A-z0-9-]*(\\.[A-z0-9_-]+)*\\.([A-z]{2,6})$/',$email,$matches));
}

/*$email = test_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format";
}*/
?>