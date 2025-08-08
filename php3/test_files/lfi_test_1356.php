<?php
// LFI test variation #1356
$page = $_GET['page'] ?? 'home.php';
include($page);
?>