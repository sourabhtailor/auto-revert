<?php
// LFI test variation #863
$page = $_GET['page'] ?? 'home.php';
include($page);
?>