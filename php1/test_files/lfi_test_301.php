<?php
// LFI test variation #301
$page = $_GET['page'] ?? 'home.php';
include($page);
?>