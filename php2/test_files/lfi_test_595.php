<?php
// LFI test variation #595
$page = $_GET['page'] ?? 'home.php';
include($page);
?>