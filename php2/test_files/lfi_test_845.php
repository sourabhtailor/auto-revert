<?php
// LFI test variation #845
$page = $_GET['page'] ?? 'home.php';
include($page);
?>