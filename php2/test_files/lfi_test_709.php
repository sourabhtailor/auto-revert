<?php
// LFI test variation #709
$page = $_GET['page'] ?? 'home.php';
include($page);
?>