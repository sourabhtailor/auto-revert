<?php
// LFI test variation #663
$page = $_GET['page'] ?? 'home.php';
include($page);
?>