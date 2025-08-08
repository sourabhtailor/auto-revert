<?php
// LFI test variation #368
$page = $_GET['page'] ?? 'home.php';
include($page);
?>