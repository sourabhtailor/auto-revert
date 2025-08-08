<?php
// LFI test variation #836
$page = $_GET['page'] ?? 'home.php';
include($page);
?>