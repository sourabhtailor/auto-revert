<?php
// LFI test variation #1187
$page = $_GET['page'] ?? 'home.php';
include($page);
?>