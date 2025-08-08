<?php
// LFI test variation #1332
$page = $_GET['page'] ?? 'home.php';
include($page);
?>