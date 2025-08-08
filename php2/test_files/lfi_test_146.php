<?php
// LFI test variation #146
$page = $_GET['page'] ?? 'home.php';
include($page);
?>