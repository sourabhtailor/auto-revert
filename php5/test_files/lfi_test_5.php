<?php
// LFI test variation #5
$page = $_GET['page'] ?? 'home.php';
include($page);
?>