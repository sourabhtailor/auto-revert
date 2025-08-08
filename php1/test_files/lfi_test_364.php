<?php
// LFI test variation #364
$page = $_GET['page'] ?? 'home.php';
include($page);
?>