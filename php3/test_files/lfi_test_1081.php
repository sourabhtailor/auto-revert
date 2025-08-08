<?php
// LFI test variation #1081
$page = $_GET['page'] ?? 'home.php';
include($page);
?>