<?php
// LFI test variation #986
$page = $_GET['page'] ?? 'home.php';
include($page);
?>