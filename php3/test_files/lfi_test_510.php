<?php
// LFI test variation #510
$page = $_GET['page'] ?? 'home.php';
include($page);
?>