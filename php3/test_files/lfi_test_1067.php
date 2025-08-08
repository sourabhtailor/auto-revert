<?php
// LFI test variation #1067
$page = $_GET['page'] ?? 'home.php';
include($page);
?>