<?php
// LFI test variation #648
$page = $_GET['page'] ?? 'home.php';
include($page);
?>