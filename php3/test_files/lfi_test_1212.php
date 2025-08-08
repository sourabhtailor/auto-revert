<?php
// LFI test variation #1212
$page = $_GET['page'] ?? 'home.php';
include($page);
?>