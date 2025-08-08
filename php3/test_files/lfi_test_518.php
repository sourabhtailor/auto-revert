<?php
// LFI test variation #518
$page = $_GET['page'] ?? 'home.php';
include($page);
?>