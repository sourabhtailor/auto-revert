<?php
// LFI test variation #1013
$page = $_GET['page'] ?? 'home.php';
include($page);
?>