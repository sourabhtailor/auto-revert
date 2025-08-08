<?php
// LFI test variation #1285
$page = $_GET['page'] ?? 'home.php';
include($page);
?>