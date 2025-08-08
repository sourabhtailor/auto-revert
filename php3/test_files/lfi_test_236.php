<?php
// LFI test variation #236
$page = $_GET['page'] ?? 'home.php';
include($page);
?>