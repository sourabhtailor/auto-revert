<?php
// LFI test variation #892
$page = $_GET['page'] ?? 'home.php';
include($page);
?>