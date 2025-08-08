<?php
// LFI test variation #614
$page = $_GET['page'] ?? 'home.php';
include($page);
?>