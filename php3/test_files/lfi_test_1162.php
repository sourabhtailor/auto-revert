<?php
// LFI test variation #1162
$page = $_GET['page'] ?? 'home.php';
include($page);
?>