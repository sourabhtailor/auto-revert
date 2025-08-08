<?php
// LFI test variation #739
$page = $_GET['page'] ?? 'home.php';
include($page);
?>