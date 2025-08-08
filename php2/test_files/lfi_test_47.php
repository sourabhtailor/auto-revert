<?php
// LFI test variation #47
$page = $_GET['page'] ?? 'home.php';
include($page);
?>