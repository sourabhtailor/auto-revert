<?php
// LFI test variation #1006
$page = $_GET['page'] ?? 'home.php';
include($page);
?>