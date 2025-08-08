<?php
// LFI test variation #219
$page = $_GET['page'] ?? 'home.php';
include($page);
?>