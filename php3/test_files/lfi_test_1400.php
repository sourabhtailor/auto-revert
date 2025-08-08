<?php
// LFI test variation #1400
$page = $_GET['page'] ?? 'home.php';
include($page);
?>