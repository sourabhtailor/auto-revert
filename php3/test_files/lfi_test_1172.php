<?php
// LFI test variation #1172
$page = $_GET['page'] ?? 'home.php';
include($page);
?>