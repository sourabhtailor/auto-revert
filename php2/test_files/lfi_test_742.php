<?php
// LFI test variation #742
$page = $_GET['page'] ?? 'home.php';
include($page);
?>