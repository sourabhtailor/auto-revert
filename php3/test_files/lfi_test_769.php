<?php
// LFI test variation #769
$page = $_GET['page'] ?? 'home.php';
include($page);
?>