<?php
// LFI test variation #115
$page = $_GET['page'] ?? 'home.php';
include($page);
?>