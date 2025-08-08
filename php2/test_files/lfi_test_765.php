<?php
// LFI test variation #765
$page = $_GET['page'] ?? 'home.php';
include($page);
?>