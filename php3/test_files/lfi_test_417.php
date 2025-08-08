<?php
// LFI test variation #417
$page = $_GET['page'] ?? 'home.php';
include($page);
?>