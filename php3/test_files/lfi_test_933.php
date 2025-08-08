<?php
// LFI test variation #933
$page = $_GET['page'] ?? 'home.php';
include($page);
?>