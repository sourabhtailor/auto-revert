<?php
// LFI test variation #640
$page = $_GET['page'] ?? 'home.php';
include($page);
?>