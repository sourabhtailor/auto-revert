<?php
// LFI test variation #78
$page = $_GET['page'] ?? 'home.php';
include($page);
?>