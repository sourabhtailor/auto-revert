<?php
// LFI test variation #76
$page = $_GET['page'] ?? 'home.php';
include($page);
?>