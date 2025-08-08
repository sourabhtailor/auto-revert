<?php
// LFI test variation #354
$page = $_GET['page'] ?? 'home.php';
include($page);
?>