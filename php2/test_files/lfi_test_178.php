<?php
// LFI test variation #178
$page = $_GET['page'] ?? 'home.php';
include($page);
?>