<?php
// LFI test variation #951
$page = $_GET['page'] ?? 'home.php';
include($page);
?>