<?php
// LFI test variation #198
$page = $_GET['page'] ?? 'home.php';
include($page);
?>