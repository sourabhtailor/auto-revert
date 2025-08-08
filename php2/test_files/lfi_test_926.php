<?php
// LFI test variation #926
$page = $_GET['page'] ?? 'home.php';
include($page);
?>