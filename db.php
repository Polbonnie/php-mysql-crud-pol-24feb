<?php
  session_start();

  $conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'php_mysql_crud_pol_24feb24'
  )or die(mysqli_erro($mysqli));
?>