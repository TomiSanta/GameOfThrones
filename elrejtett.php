<?php
  session_start();
  if (!isset($_SESSION["felhasznalo"])) {
    header("Location: bejelentkezes.php");
  }

?>