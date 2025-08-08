<?php
// LFI test variation #1009
$page = $_GET['page'] ?? 'home.php';
include($page);
?>