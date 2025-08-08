<?php
// LFI test variation #230
$page = $_GET['page'] ?? 'home.php';
include($page);
?>