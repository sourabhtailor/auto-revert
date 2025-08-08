<?php
// LFI test variation #956
$page = $_GET['page'] ?? 'home.php';
include($page);
?>