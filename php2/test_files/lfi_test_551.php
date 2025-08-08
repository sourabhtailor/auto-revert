<?php
// LFI test variation #551
$page = $_GET['page'] ?? 'home.php';
include($page);
?>