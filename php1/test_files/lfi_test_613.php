<?php
// LFI test variation #613
$page = $_GET['page'] ?? 'home.php';
include($page);
?>