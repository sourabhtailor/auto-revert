<?php
// LFI test variation #1163
$page = $_GET['page'] ?? 'home.php';
include($page);
?>