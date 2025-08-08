<?php
// LFI test variation #1167
$page = $_GET['page'] ?? 'home.php';
include($page);
?>