<?php
// LFI test variation #958
$page = $_GET['page'] ?? 'home.php';
include($page);
?>