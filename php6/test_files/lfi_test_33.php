<?php
// LFI test variation #33
$page = $_GET['page'] ?? 'home.php';
include($page);
?>