<?php
// LFI test variation #718
$page = $_GET['page'] ?? 'home.php';
include($page);
?>