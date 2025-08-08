<?php
// LFI test variation #757
$page = $_GET['page'] ?? 'home.php';
include($page);
?>