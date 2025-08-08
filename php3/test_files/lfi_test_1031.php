<?php
// LFI test variation #1031
$page = $_GET['page'] ?? 'home.php';
include($page);
?>