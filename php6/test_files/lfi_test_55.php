<?php
// LFI test variation #55
$page = $_GET['page'] ?? 'home.php';
include($page);
?>