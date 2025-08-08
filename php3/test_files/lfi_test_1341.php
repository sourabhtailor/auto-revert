<?php
// LFI test variation #1341
$page = $_GET['page'] ?? 'home.php';
include($page);
?>