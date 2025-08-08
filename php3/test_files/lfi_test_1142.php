<?php
// LFI test variation #1142
$page = $_GET['page'] ?? 'home.php';
include($page);
?>