<?php
// LFI test variation #1457
$page = $_GET['page'] ?? 'home.php';
include($page);
?>