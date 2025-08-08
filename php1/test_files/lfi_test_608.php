<?php
// LFI test variation #608
$page = $_GET['page'] ?? 'home.php';
include($page);
?>