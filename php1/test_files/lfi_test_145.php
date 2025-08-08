<?php
// LFI test variation #145
$page = $_GET['page'] ?? 'home.php';
include($page);
?>