<?php
// LFI test variation #1350
$page = $_GET['page'] ?? 'home.php';
include($page);
?>