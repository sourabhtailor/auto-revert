<?php
// LFI test variation #384
$page = $_GET['page'] ?? 'home.php';
include($page);
?>