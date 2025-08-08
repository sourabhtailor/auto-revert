<?php
// LFI test variation #548
$page = $_GET['page'] ?? 'home.php';
include($page);
?>