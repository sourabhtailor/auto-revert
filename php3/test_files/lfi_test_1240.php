<?php
// LFI test variation #1240
$page = $_GET['page'] ?? 'home.php';
include($page);
?>