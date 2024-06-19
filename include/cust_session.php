<?php
session_start();

$data = $_SESSION['data'];

header("Location: ../loggedinheader.php");