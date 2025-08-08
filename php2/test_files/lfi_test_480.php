<?php
// LFI test variation #480
$page = $_GET['page'] ?? 'home.php';
include($page);
?>