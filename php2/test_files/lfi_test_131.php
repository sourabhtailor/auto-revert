<?php
// LFI test variation #131
$page = $_GET['page'] ?? 'home.php';
include($page);
?>