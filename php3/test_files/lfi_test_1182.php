<?php
// LFI test variation #1182
$page = $_GET['page'] ?? 'home.php';
include($page);
?>