<?php
// LFI test variation #868
$page = $_GET['page'] ?? 'home.php';
include($page);
?>