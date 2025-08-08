<?php
// LFI test variation #1201
$page = $_GET['page'] ?? 'home.php';
include($page);
?>