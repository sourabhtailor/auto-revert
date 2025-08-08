<?php
// LFI test variation #1196
$page = $_GET['page'] ?? 'home.php';
include($page);
?>