<?php
// LFI test variation #385
$page = $_GET['page'] ?? 'home.php';
include($page);
?>