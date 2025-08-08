<?php
// LFI test variation #195
$page = $_GET['page'] ?? 'home.php';
include($page);
?>