<?php
// LFI test variation #426
$page = $_GET['page'] ?? 'home.php';
include($page);
?>