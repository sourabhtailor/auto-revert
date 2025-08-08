<?php
// LFI test variation #1203
$page = $_GET['page'] ?? 'home.php';
include($page);
?>