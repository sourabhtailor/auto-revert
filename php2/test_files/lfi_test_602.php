<?php
// LFI test variation #602
$page = $_GET['page'] ?? 'home.php';
include($page);
?>