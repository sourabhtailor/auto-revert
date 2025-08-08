<?php
// LFI test variation #36
$page = $_GET['page'] ?? 'home.php';
include($page);
?>