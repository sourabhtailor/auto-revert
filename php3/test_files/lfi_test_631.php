<?php
// LFI test variation #631
$page = $_GET['page'] ?? 'home.php';
include($page);
?>