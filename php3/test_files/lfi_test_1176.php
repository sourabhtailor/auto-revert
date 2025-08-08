<?php
// LFI test variation #1176
$page = $_GET['page'] ?? 'home.php';
include($page);
?>