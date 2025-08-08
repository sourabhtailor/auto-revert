<?php
// LFI test variation #266
$page = $_GET['page'] ?? 'home.php';
include($page);
?>