<?php
// LFI test variation #547
$page = $_GET['page'] ?? 'home.php';
include($page);
?>