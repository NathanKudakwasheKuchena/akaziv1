<?php 
include "session.php";
unset($_SESSION['id']);
header("../location:index.php");

?>