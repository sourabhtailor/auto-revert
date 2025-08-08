<?php
// LFI test variation #780
$page = $_GET['page'] ?? 'home.php';
include($page);
?>