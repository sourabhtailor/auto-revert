<?php
// LFI test variation #575
$page = $_GET['page'] ?? 'home.php';
include($page);
?>