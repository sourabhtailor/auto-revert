<?php
// LFI test variation #199
$page = $_GET['page'] ?? 'home.php';
include($page);
?>