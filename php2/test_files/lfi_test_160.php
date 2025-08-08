<?php
// LFI test variation #160
$page = $_GET['page'] ?? 'home.php';
include($page);
?>