<?php
// LFI test variation #618
$page = $_GET['page'] ?? 'home.php';
include($page);
?>