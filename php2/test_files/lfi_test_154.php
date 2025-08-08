<?php
// LFI test variation #154
$page = $_GET['page'] ?? 'home.php';
include($page);
?>