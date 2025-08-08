<?php
// LFI test variation #527
$page = $_GET['page'] ?? 'home.php';
include($page);
?>