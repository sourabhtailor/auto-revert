<?php
// LFI test variation #592
$page = $_GET['page'] ?? 'home.php';
include($page);
?>