<?php
// LFI test variation #444
$page = $_GET['page'] ?? 'home.php';
include($page);
?>