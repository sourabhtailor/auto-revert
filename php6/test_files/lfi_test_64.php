<?php
// LFI test variation #64
$page = $_GET['page'] ?? 'home.php';
include($page);
?>