<?php
// LFI test variation #161
$page = $_GET['page'] ?? 'home.php';
include($page);
?>