<?php
// LFI test variation #1191
$page = $_GET['page'] ?? 'home.php';
include($page);
?>