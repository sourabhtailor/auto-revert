<?php
// LFI test variation #121
$page = $_GET['page'] ?? 'home.php';
include($page);
?>