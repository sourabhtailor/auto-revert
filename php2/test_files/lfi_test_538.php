<?php
// LFI test variation #538
$page = $_GET['page'] ?? 'home.php';
include($page);
?>