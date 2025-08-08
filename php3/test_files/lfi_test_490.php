<?php
// LFI test variation #490
$page = $_GET['page'] ?? 'home.php';
include($page);
?>