<?php
// LFI test variation #1402
$page = $_GET['page'] ?? 'home.php';
include($page);
?>