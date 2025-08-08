<?php
// LFI test variation #159
$page = $_GET['page'] ?? 'home.php';
include($page);
?>