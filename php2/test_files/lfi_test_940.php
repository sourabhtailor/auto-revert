<?php
// LFI test variation #940
$page = $_GET['page'] ?? 'home.php';
include($page);
?>