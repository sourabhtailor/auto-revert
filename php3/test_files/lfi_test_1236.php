<?php
// LFI test variation #1236
$page = $_GET['page'] ?? 'home.php';
include($page);
?>