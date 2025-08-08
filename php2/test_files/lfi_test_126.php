<?php
// LFI test variation #126
$page = $_GET['page'] ?? 'home.php';
include($page);
?>