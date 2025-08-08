<?php
// LFI test variation #688
$page = $_GET['page'] ?? 'home.php';
include($page);
?>