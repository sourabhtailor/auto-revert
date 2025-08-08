<?php
// LFI test variation #7
$page = $_GET['page'] ?? 'home.php';
include($page);
?>