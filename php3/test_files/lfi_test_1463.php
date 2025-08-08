<?php
// LFI test variation #1463
$page = $_GET['page'] ?? 'home.php';
include($page);
?>