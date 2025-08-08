<?php
// LFI test variation #1037
$page = $_GET['page'] ?? 'home.php';
include($page);
?>