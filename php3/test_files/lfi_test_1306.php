<?php
// LFI test variation #1306
$page = $_GET['page'] ?? 'home.php';
include($page);
?>