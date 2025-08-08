<?php
// LFI test variation #1166
$page = $_GET['page'] ?? 'home.php';
include($page);
?>