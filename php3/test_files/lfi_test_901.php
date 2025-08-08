<?php
// LFI test variation #901
$page = $_GET['page'] ?? 'home.php';
include($page);
?>