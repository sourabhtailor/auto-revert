<?php
// LFI test variation #899
$page = $_GET['page'] ?? 'home.php';
include($page);
?>