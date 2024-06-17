<?php
session_start();
session_unset(); //voor de zekerheid
session_destroy();
header('Location: Eindopdracht 2.php');
?>
