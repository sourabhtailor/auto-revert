<?php
// LFI test variation #294
$page = $_GET['page'] ?? 'home.php';
include($page);
?>