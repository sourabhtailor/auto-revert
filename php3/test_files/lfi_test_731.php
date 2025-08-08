<?php
// LFI test variation #731
$page = $_GET['page'] ?? 'home.php';
include($page);
?>