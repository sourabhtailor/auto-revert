<?php
// LFI test variation #466
$page = $_GET['page'] ?? 'home.php';
include($page);
?>