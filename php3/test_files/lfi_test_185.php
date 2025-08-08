<?php
// LFI test variation #185
$page = $_GET['page'] ?? 'home.php';
include($page);
?>