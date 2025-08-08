<?php
// LFI test variation #1294
$page = $_GET['page'] ?? 'home.php';
include($page);
?>