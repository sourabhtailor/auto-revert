<?php
// LFI test variation #463
$page = $_GET['page'] ?? 'home.php';
include($page);
?>