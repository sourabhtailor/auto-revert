<?php
// LFI test variation #728
$page = $_GET['page'] ?? 'home.php';
include($page);
?>