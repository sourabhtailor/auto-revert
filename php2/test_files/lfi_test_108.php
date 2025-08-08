<?php
// LFI test variation #108
$page = $_GET['page'] ?? 'home.php';
include($page);
?>