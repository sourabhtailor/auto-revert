<?php
// LFI test variation #18
$page = $_GET['page'] ?? 'home.php';
include($page);
?>