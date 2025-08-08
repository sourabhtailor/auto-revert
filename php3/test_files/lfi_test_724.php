<?php
// LFI test variation #724
$page = $_GET['page'] ?? 'home.php';
include($page);
?>