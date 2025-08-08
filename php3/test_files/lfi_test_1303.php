<?php
// LFI test variation #1303
$page = $_GET['page'] ?? 'home.php';
include($page);
?>