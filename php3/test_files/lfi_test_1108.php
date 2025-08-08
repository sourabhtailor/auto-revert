<?php
// LFI test variation #1108
$page = $_GET['page'] ?? 'home.php';
include($page);
?>