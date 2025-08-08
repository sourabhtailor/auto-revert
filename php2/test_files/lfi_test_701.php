<?php
// LFI test variation #701
$page = $_GET['page'] ?? 'home.php';
include($page);
?>