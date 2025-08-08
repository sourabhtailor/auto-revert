<?php
// LFI test variation #347
$page = $_GET['page'] ?? 'home.php';
include($page);
?>