<?php
// LFI test variation #984
$page = $_GET['page'] ?? 'home.php';
include($page);
?>