<?php
// LFI test variation #212
$page = $_GET['page'] ?? 'home.php';
include($page);
?>