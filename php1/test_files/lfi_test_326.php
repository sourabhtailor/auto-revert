<?php
// LFI test variation #326
$page = $_GET['page'] ?? 'home.php';
include($page);
?>