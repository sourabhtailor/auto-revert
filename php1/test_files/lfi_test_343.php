<?php
// LFI test variation #343
$page = $_GET['page'] ?? 'home.php';
include($page);
?>