<?php
// LFI test variation #1389
$page = $_GET['page'] ?? 'home.php';
include($page);
?>