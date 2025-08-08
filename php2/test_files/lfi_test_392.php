<?php
// LFI test variation #392
$page = $_GET['page'] ?? 'home.php';
include($page);
?>