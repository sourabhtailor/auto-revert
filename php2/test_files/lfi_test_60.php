<?php
// LFI test variation #60
$page = $_GET['page'] ?? 'home.php';
include($page);
?>