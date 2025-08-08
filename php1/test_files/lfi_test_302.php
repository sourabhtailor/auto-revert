<?php
// LFI test variation #302
$page = $_GET['page'] ?? 'home.php';
include($page);
?>