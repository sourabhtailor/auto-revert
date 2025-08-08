<?php
// LFI test variation #12
$page = $_GET['page'] ?? 'home.php';
include($page);
?>