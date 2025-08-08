<?php
// LFI test variation #677
$page = $_GET['page'] ?? 'home.php';
include($page);
?>