<?php
// LFI test variation #991
$page = $_GET['page'] ?? 'home.php';
include($page);
?>