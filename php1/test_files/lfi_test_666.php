<?php
// LFI test variation #666
$page = $_GET['page'] ?? 'home.php';
include($page);
?>