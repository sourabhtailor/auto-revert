<?php
// LFI test variation #744
$page = $_GET['page'] ?? 'home.php';
include($page);
?>