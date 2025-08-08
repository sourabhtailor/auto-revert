<?php
// LFI test variation #407
$page = $_GET['page'] ?? 'home.php';
include($page);
?>