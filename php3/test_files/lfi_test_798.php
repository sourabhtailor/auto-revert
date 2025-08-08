<?php
// LFI test variation #798
$page = $_GET['page'] ?? 'home.php';
include($page);
?>