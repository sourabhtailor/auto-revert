<?php
// LFI test variation #1170
$page = $_GET['page'] ?? 'home.php';
include($page);
?>