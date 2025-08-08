<?php
// LFI test variation #94
$page = $_GET['page'] ?? 'home.php';
include($page);
?>