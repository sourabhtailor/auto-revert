<?php
// LFI test variation #722
$page = $_GET['page'] ?? 'home.php';
include($page);
?>