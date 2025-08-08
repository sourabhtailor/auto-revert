<?php
// LFI test variation #1369
$page = $_GET['page'] ?? 'home.php';
include($page);
?>