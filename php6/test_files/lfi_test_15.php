<?php
// LFI test variation #15
$page = $_GET['page'] ?? 'home.php';
include($page);
?>