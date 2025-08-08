<?php
// LFI test variation #964
$page = $_GET['page'] ?? 'home.php';
include($page);
?>