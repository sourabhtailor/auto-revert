<?php
// LFI test variation #824
$page = $_GET['page'] ?? 'home.php';
include($page);
?>