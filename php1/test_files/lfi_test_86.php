<?php
// LFI test variation #86
$page = $_GET['page'] ?? 'home.php';
include($page);
?>