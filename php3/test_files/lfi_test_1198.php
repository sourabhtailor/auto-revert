<?php
// LFI test variation #1198
$page = $_GET['page'] ?? 'home.php';
include($page);
?>