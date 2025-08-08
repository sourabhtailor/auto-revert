<?php
// LFI test variation #245
$page = $_GET['page'] ?? 'home.php';
include($page);
?>