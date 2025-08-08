<?php
// LFI test variation #1040
$page = $_GET['page'] ?? 'home.php';
include($page);
?>