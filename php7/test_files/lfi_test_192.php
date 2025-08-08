<?php
// LFI test variation #192
$page = $_GET['page'] ?? 'home.php';
include($page);
?>