<?php
// LFI test variation #464
$page = $_GET['page'] ?? 'home.php';
include($page);
?>