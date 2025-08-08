<?php
// LFI test variation #182
$page = $_GET['page'] ?? 'home.php';
include($page);
?>