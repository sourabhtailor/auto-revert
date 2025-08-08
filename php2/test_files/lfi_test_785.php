<?php
// LFI test variation #785
$page = $_GET['page'] ?? 'home.php';
include($page);
?>