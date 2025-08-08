<?php
// LFI test variation #1151
$page = $_GET['page'] ?? 'home.php';
include($page);
?>