<?php
session_start();

if (!isset($_SESSION["logged_in"])) {
  exit("Not authorized");
}

$target = "images/artwork/" . basename($_FILES["image"]["name"]);
move_uploaded_file($_FILES["image"]["tmp_name"], $target);

header("Location: admin.php");