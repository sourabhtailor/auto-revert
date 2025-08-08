<?php
// LFI test variation #174
$page = $_GET['page'] ?? 'home.php';
include($page);
?>