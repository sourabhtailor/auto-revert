<?php
// LFI test variation #1299
$page = $_GET['page'] ?? 'home.php';
include($page);
?>