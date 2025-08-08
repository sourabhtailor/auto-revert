<?php
// LFI test variation #541
$page = $_GET['page'] ?? 'home.php';
include($page);
?>