<?php
// LFI test variation #980
$page = $_GET['page'] ?? 'home.php';
include($page);
?>