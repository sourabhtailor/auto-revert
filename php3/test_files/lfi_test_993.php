<?php
// LFI test variation #993
$page = $_GET['page'] ?? 'home.php';
include($page);
?>