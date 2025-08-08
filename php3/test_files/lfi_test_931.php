<?php
// LFI test variation #931
$page = $_GET['page'] ?? 'home.php';
include($page);
?>