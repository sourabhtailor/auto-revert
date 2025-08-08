<?php
// LFI test variation #810
$page = $_GET['page'] ?? 'home.php';
include($page);
?>