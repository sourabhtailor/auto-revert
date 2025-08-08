<?php
// LFI test variation #1359
$page = $_GET['page'] ?? 'home.php';
include($page);
?>