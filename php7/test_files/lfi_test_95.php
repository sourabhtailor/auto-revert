<?php
// LFI test variation #95
$page = $_GET['page'] ?? 'home.php';
include($page);
?>