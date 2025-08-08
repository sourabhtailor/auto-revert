<?php
// LFI test variation #847
$page = $_GET['page'] ?? 'home.php';
include($page);
?>