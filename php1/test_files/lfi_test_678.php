<?php
// LFI test variation #678
$page = $_GET['page'] ?? 'home.php';
include($page);
?>