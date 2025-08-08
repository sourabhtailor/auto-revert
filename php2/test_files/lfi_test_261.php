<?php
// LFI test variation #261
$page = $_GET['page'] ?? 'home.php';
include($page);
?>