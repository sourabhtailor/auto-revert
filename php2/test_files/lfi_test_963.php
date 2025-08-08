<?php
// LFI test variation #963
$page = $_GET['page'] ?? 'home.php';
include($page);
?>