<?php
// LFI test variation #994
$page = $_GET['page'] ?? 'home.php';
include($page);
?>