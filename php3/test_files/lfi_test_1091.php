<?php
// LFI test variation #1091
$page = $_GET['page'] ?? 'home.php';
include($page);
?>