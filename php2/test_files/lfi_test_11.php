<?php
// LFI test variation #11
$page = $_GET['page'] ?? 'home.php';
include($page);
?>