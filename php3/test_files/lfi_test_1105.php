<?php
// LFI test variation #1105
$page = $_GET['page'] ?? 'home.php';
include($page);
?>