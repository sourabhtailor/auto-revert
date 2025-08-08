<?php
// LFI test variation #101
$page = $_GET['page'] ?? 'home.php';
include($page);
?>