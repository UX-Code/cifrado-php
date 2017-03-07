<?php
$password = $_POST['cadena'];

switch ($_POST['cifrado']){
  case 'MD5':
    $salida = md5($password);
  break;

  case 'SHA1':
    $salida = sha1($password);
  break;

  case 'SALT':
    $salt   = '$bgr$/';
    $salida = md5($salt . $password);
  break;

  case 'COMBINADO':
    $salt   = '$bgr$/';
    $salida = sha1(md5($salt . $password));
  break;

  case 'API':
    $salida = password_hash($password, PASSWORD_DEFAULT);
  break;

}

  echo '<h1 style="text-align:center; color: red">'.$salida.'</h1>';
?>
