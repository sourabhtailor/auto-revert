<?php
// LFI test variation #49
$page = $_GET['page'] ?? 'home.php';
include($page);
?>