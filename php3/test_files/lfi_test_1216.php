<?php
// LFI test variation #1216
$page = $_GET['page'] ?? 'home.php';
include($page);
?>