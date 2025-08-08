<?php
// LFI test variation #324
$page = $_GET['page'] ?? 'home.php';
include($page);
?>