<?php
// LFI test variation #680
$page = $_GET['page'] ?? 'home.php';
include($page);
?>