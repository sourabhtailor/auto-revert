<?php
// LFI test variation #514
$page = $_GET['page'] ?? 'home.php';
include($page);
?>