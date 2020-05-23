<?php
// killing all sessions and connections to the database and redirecting user to the index.php webpage
session_start();
session_unset();
session_destroy();
header("Location: ../index.php");
?>