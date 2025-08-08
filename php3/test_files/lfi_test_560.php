<?php
// LFI test variation #560
$page = $_GET['page'] ?? 'home.php';
include($page);
?>