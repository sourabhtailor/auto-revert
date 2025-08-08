<?php
// LFI test variation #349
$page = $_GET['page'] ?? 'home.php';
include($page);
?>