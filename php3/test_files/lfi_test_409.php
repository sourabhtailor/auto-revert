<?php
// LFI test variation #409
$page = $_GET['page'] ?? 'home.php';
include($page);
?>