<?php
// LFI test variation #110
$page = $_GET['page'] ?? 'home.php';
include($page);
?>