<?php
// LFI test variation #1416
$page = $_GET['page'] ?? 'home.php';
include($page);
?>