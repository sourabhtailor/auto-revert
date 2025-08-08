<?php
// LFI test variation #404
$page = $_GET['page'] ?? 'home.php';
include($page);
?>