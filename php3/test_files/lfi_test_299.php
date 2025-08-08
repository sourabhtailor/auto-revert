<?php
// LFI test variation #299
$page = $_GET['page'] ?? 'home.php';
include($page);
?>