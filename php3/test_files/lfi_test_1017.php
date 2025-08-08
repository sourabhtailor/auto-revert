<?php
// LFI test variation #1017
$page = $_GET['page'] ?? 'home.php';
include($page);
?>