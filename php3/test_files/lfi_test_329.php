<?php
// LFI test variation #329
$page = $_GET['page'] ?? 'home.php';
include($page);
?>