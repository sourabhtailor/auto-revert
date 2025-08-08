<?php
// LFI test variation #91
$page = $_GET['page'] ?? 'home.php';
include($page);
?>