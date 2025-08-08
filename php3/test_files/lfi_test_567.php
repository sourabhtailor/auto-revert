<?php
// LFI test variation #567
$page = $_GET['page'] ?? 'home.php';
include($page);
?>