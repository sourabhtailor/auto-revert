<?php
// LFI test variation #240
$page = $_GET['page'] ?? 'home.php';
include($page);
?>