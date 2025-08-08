<?php
// LFI test variation #114
$page = $_GET['page'] ?? 'home.php';
include($page);
?>