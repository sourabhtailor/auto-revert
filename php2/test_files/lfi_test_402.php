<?php
// LFI test variation #402
$page = $_GET['page'] ?? 'home.php';
include($page);
?>