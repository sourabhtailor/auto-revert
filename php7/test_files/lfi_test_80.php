<?php
// LFI test variation #80
$page = $_GET['page'] ?? 'home.php';
include($page);
?>