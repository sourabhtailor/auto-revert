<?php
// LFI test variation #117
$page = $_GET['page'] ?? 'home.php';
include($page);
?>