<?php
// LFI test variation #205
$page = $_GET['page'] ?? 'home.php';
include($page);
?>