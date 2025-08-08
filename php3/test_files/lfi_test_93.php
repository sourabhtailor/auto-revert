<?php
// LFI test variation #93
$page = $_GET['page'] ?? 'home.php';
include($page);
?>