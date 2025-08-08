<?php
// LFI test variation #1300
$page = $_GET['page'] ?? 'home.php';
include($page);
?>