<?php
// LFI test variation #303
$page = $_GET['page'] ?? 'home.php';
include($page);
?>