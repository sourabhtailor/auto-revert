<?php
// LFI test variation #783
$page = $_GET['page'] ?? 'home.php';
include($page);
?>