<?php
// LFI test variation #1158
$page = $_GET['page'] ?? 'home.php';
include($page);
?>