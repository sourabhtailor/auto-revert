<?php
// LFI test variation #1070
$page = $_GET['page'] ?? 'home.php';
include($page);
?>