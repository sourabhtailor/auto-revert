<?php
// LFI test variation #1053
$page = $_GET['page'] ?? 'home.php';
include($page);
?>