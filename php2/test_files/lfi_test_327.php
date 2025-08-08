<?php
// LFI test variation #327
$page = $_GET['page'] ?? 'home.php';
include($page);
?>