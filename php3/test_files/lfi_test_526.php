<?php
// LFI test variation #526
$page = $_GET['page'] ?? 'home.php';
include($page);
?>