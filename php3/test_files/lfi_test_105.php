<?php
// LFI test variation #105
$page = $_GET['page'] ?? 'home.php';
include($page);
?>