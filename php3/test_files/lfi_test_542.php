<?php
// LFI test variation #542
$page = $_GET['page'] ?? 'home.php';
include($page);
?>