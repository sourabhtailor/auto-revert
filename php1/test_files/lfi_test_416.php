<?php
// LFI test variation #416
$page = $_GET['page'] ?? 'home.php';
include($page);
?>