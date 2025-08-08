<?php
// LFI test variation #1144
$page = $_GET['page'] ?? 'home.php';
include($page);
?>