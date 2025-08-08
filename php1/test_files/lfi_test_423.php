<?php
// LFI test variation #423
$page = $_GET['page'] ?? 'home.php';
include($page);
?>