<?php
// LFI test variation #1445
$page = $_GET['page'] ?? 'home.php';
include($page);
?>