<?php
// LFI test variation #1174
$page = $_GET['page'] ?? 'home.php';
include($page);
?>