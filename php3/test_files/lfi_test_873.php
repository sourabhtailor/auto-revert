<?php
// LFI test variation #873
$page = $_GET['page'] ?? 'home.php';
include($page);
?>