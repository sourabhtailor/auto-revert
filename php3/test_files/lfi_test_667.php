<?php
// LFI test variation #667
$page = $_GET['page'] ?? 'home.php';
include($page);
?>