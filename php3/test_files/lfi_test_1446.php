<?php
// LFI test variation #1446
$page = $_GET['page'] ?? 'home.php';
include($page);
?>