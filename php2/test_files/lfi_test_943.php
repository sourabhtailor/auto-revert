<?php
// LFI test variation #943
$page = $_GET['page'] ?? 'home.php';
include($page);
?>