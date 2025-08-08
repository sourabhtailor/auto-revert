<?php
// LFI test variation #1027
$page = $_GET['page'] ?? 'home.php';
include($page);
?>