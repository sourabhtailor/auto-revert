<?php
// LFI test variation #1088
$page = $_GET['page'] ?? 'home.php';
include($page);
?>