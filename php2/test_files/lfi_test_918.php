<?php
// LFI test variation #918
$page = $_GET['page'] ?? 'home.php';
include($page);
?>