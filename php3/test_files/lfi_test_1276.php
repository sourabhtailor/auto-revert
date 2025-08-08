<?php
// LFI test variation #1276
$page = $_GET['page'] ?? 'home.php';
include($page);
?>