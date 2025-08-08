<?php
// LFI test variation #754
$page = $_GET['page'] ?? 'home.php';
include($page);
?>