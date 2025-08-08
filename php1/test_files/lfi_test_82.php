<?php
// LFI test variation #82
$page = $_GET['page'] ?? 'home.php';
include($page);
?>