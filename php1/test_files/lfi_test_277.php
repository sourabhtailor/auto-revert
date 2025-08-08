<?php
// LFI test variation #277
$page = $_GET['page'] ?? 'home.php';
include($page);
?>