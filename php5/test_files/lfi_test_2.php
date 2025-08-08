<?php
// LFI test variation #2
$page = $_GET['page'] ?? 'home.php';
include($page);
?>