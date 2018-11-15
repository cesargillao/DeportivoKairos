<?php
session_start();
$_SESSION['Login'] = 'usuario';

header('Location: ../index.php');
?>
