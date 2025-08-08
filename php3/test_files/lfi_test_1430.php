<?php
// LFI test variation #1430
$page = $_GET['page'] ?? 'home.php';
include($page);
?>