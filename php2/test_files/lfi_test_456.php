<?php
// LFI test variation #456
$page = $_GET['page'] ?? 'home.php';
include($page);
?>