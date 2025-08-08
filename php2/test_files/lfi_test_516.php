<?php
// LFI test variation #516
$page = $_GET['page'] ?? 'home.php';
include($page);
?>