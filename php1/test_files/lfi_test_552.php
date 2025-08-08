<?php
// LFI test variation #552
$page = $_GET['page'] ?? 'home.php';
include($page);
?>