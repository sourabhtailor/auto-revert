<?php
// LFI test variation #1399
$page = $_GET['page'] ?? 'home.php';
include($page);
?>