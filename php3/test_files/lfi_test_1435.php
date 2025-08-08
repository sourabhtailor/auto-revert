<?php
// LFI test variation #1435
$page = $_GET['page'] ?? 'home.php';
include($page);
?>