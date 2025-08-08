<?php
// LFI test variation #1375
$page = $_GET['page'] ?? 'home.php';
include($page);
?>