<?php
// LFI test variation #658
$page = $_GET['page'] ?? 'home.php';
include($page);
?>