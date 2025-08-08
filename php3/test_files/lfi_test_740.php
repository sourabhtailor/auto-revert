<?php
// LFI test variation #740
$page = $_GET['page'] ?? 'home.php';
include($page);
?>