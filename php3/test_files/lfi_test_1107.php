<?php
// LFI test variation #1107
$page = $_GET['page'] ?? 'home.php';
include($page);
?>