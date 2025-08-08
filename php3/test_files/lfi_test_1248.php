<?php
// LFI test variation #1248
$page = $_GET['page'] ?? 'home.php';
include($page);
?>