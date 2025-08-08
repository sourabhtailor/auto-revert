<?php
// LFI test variation #304
$page = $_GET['page'] ?? 'home.php';
include($page);
?>