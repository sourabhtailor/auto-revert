<?php
// LFI test variation #214
$page = $_GET['page'] ?? 'home.php';
include($page);
?>