<?php
// LFI test variation #620
$page = $_GET['page'] ?? 'home.php';
include($page);
?>