<?php
// LFI test variation #1455
$page = $_GET['page'] ?? 'home.php';
include($page);
?>