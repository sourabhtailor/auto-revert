<?php
// LFI test variation #600
$page = $_GET['page'] ?? 'home.php';
include($page);
?>