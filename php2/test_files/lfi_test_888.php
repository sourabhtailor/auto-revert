<?php
// LFI test variation #888
$page = $_GET['page'] ?? 'home.php';
include($page);
?>