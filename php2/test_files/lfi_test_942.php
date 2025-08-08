<?php
// LFI test variation #942
$page = $_GET['page'] ?? 'home.php';
include($page);
?>