<?php
// LFI test variation #479
$page = $_GET['page'] ?? 'home.php';
include($page);
?>