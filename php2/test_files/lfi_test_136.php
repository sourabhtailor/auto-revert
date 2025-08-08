<?php
// LFI test variation #136
$page = $_GET['page'] ?? 'home.php';
include($page);
?>