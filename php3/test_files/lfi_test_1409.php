<?php
// LFI test variation #1409
$page = $_GET['page'] ?? 'home.php';
include($page);
?>