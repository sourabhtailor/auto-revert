<?php
// LFI test variation #394
$page = $_GET['page'] ?? 'home.php';
include($page);
?>