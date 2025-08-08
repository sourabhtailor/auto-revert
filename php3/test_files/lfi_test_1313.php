<?php
// LFI test variation #1313
$page = $_GET['page'] ?? 'home.php';
include($page);
?>