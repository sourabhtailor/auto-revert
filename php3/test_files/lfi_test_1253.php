<?php
// LFI test variation #1253
$page = $_GET['page'] ?? 'home.php';
include($page);
?>