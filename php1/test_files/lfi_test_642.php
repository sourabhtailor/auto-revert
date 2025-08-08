<?php
// LFI test variation #642
$page = $_GET['page'] ?? 'home.php';
include($page);
?>