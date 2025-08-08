<?php
// LFI test variation #1195
$page = $_GET['page'] ?? 'home.php';
include($page);
?>