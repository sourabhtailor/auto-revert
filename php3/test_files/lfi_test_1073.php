<?php
// LFI test variation #1073
$page = $_GET['page'] ?? 'home.php';
include($page);
?>