<?php
// LFI test variation #342
$page = $_GET['page'] ?? 'home.php';
include($page);
?>