<?php
// LFI test variation #403
$page = $_GET['page'] ?? 'home.php';
include($page);
?>