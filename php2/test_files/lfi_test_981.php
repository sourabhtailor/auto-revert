<?php
// LFI test variation #981
$page = $_GET['page'] ?? 'home.php';
include($page);
?>