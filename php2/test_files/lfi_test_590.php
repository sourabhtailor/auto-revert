<?php
// LFI test variation #590
$page = $_GET['page'] ?? 'home.php';
include($page);
?>