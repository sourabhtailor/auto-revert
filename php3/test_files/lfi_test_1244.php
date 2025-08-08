<?php
// LFI test variation #1244
$page = $_GET['page'] ?? 'home.php';
include($page);
?>