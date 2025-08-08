<?php
// LFI test variation #893
$page = $_GET['page'] ?? 'home.php';
include($page);
?>