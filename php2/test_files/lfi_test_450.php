<?php
// LFI test variation #450
$page = $_GET['page'] ?? 'home.php';
include($page);
?>