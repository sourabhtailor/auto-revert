<?php
// LFI test variation #467
$page = $_GET['page'] ?? 'home.php';
include($page);
?>