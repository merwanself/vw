<?php
session_start();

session_unset();//detruire les variables de session

session_destroy();//detruire la session

header('location:index.php');

?>