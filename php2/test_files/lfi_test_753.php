<?php
// LFI test variation #753
$page = $_GET['page'] ?? 'home.php';
include($page);
?>