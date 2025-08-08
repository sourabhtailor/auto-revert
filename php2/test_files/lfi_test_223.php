<?php
// LFI test variation #223
$page = $_GET['page'] ?? 'home.php';
include($page);
?>