<?php
// LFI test variation #269
$page = $_GET['page'] ?? 'home.php';
include($page);
?>