<?php
// LFI test variation #28
$page = $_GET['page'] ?? 'home.php';
include($page);
?>