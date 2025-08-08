<?php
// LFI test variation #1131
$page = $_GET['page'] ?? 'home.php';
include($page);
?>