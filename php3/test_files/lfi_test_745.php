<?php
// LFI test variation #745
$page = $_GET['page'] ?? 'home.php';
include($page);
?>