<?php
// LFI test variation #310
$page = $_GET['page'] ?? 'home.php';
include($page);
?>