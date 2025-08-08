<?php
// LFI test variation #1156
$page = $_GET['page'] ?? 'home.php';
include($page);
?>