<?php
// LFI test variation #270
$page = $_GET['page'] ?? 'home.php';
include($page);
?>