<?php
// LFI test variation #45
$page = $_GET['page'] ?? 'home.php';
include($page);
?>