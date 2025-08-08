<?php
// LFI test variation #689
$page = $_GET['page'] ?? 'home.php';
include($page);
?>