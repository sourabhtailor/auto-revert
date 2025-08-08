<?php
// LFI test variation #736
$page = $_GET['page'] ?? 'home.php';
include($page);
?>