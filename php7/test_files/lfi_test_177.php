<?php
// LFI test variation #177
$page = $_GET['page'] ?? 'home.php';
include($page);
?>