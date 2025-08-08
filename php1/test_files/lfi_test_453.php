<?php
// LFI test variation #453
$page = $_GET['page'] ?? 'home.php';
include($page);
?>