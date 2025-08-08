<?php
// LFI test variation #844
$page = $_GET['page'] ?? 'home.php';
include($page);
?>