<?php
// LFI test variation #496
$page = $_GET['page'] ?? 'home.php';
include($page);
?>