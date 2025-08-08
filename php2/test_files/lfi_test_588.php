<?php
// LFI test variation #588
$page = $_GET['page'] ?? 'home.php';
include($page);
?>