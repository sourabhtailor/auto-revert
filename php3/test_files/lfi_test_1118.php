<?php
// LFI test variation #1118
$page = $_GET['page'] ?? 'home.php';
include($page);
?>