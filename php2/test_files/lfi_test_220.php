<?php
// LFI test variation #220
$page = $_GET['page'] ?? 'home.php';
include($page);
?>