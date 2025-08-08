<?php
// LFI test variation #504
$page = $_GET['page'] ?? 'home.php';
include($page);
?>