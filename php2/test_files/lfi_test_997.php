<?php
// LFI test variation #997
$page = $_GET['page'] ?? 'home.php';
include($page);
?>