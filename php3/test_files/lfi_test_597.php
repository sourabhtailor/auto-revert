<?php
// LFI test variation #597
$page = $_GET['page'] ?? 'home.php';
include($page);
?>