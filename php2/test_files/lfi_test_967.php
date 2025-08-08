<?php
// LFI test variation #967
$page = $_GET['page'] ?? 'home.php';
include($page);
?>