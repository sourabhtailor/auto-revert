<?php
// LFI test variation #447
$page = $_GET['page'] ?? 'home.php';
include($page);
?>