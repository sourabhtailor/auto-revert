<?php
// LFI test variation #720
$page = $_GET['page'] ?? 'home.php';
include($page);
?>