<?php
// LFI test variation #1480
$page = $_GET['page'] ?? 'home.php';
include($page);
?>