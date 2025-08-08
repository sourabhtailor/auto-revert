<?php
// LFI test variation #1279
$page = $_GET['page'] ?? 'home.php';
include($page);
?>