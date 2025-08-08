<?php
// LFI test variation #1264
$page = $_GET['page'] ?? 'home.php';
include($page);
?>