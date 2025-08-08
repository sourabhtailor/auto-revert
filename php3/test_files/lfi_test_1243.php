<?php
// LFI test variation #1243
$page = $_GET['page'] ?? 'home.php';
include($page);
?>