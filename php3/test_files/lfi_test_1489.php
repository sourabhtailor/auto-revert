<?php
// LFI test variation #1489
$page = $_GET['page'] ?? 'home.php';
include($page);
?>