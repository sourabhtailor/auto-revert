<?php
// LFI test variation #406
$page = $_GET['page'] ?? 'home.php';
include($page);
?>