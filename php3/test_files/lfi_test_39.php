<?php
// LFI test variation #39
$page = $_GET['page'] ?? 'home.php';
include($page);
?>