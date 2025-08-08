<?php
// LFI test variation #376
$page = $_GET['page'] ?? 'home.php';
include($page);
?>