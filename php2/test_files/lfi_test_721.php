<?php
// LFI test variation #721
$page = $_GET['page'] ?? 'home.php';
include($page);
?>