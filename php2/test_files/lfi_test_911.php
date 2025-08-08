<?php
// LFI test variation #911
$page = $_GET['page'] ?? 'home.php';
include($page);
?>